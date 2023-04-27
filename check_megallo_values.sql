CREATE OR REPLACE TRIGGER check_megallo_values
    BEFORE INSERT OR UPDATE ON megallo
    FOR EACH ROW
DECLARE
    v_previous_record megallo%ROWTYPE;
    v_record_alike megallo%ROWTYPE;
    v_warning EXCEPTION;
    v_error EXCEPTION;
    v_error_message VARCHAR2(255);
    PRAGMA EXCEPTION_INIT(v_warning, -20001);
    PRAGMA EXCEPTION_INIT(v_error, -20002);
BEGIN
    IF :NEW.sorszam < 1 THEN
        v_error_message := '{"type":"warning","message":"Helytelen sorszámot kapott ad adatbázis, kérlek, ellenőrizd a megálló sorszámát."}';
        RAISE_APPLICATION_ERROR(-20001, v_error_message);
    END IF;

    IF :NEW.sorszam > 1 THEN
        SELECT ID, TELEPULES, NEV, KILOMETER, IDOPONT, JARAT_ID, SORSZAM INTO v_previous_record FROM megallo WHERE sorszam = (:NEW.sorszam - 1) AND JARAT_ID = :NEW.JARAT_ID ORDER BY megallo.idopont;
        SELECT ID, TELEPULES, NEV, KILOMETER, IDOPONT, JARAT_ID, SORSZAM INTO v_record_alike FROM megallo WHERE sorszam = (:NEW.sorszam) AND JARAT_ID = :NEW.JARAT_ID ORDER BY megallo.idopont;

        IF v_record_alike.id IS NOT NULL THEN
            v_error_message := '{"type":"error","message":"Ajjaj! Valami nem jó."}';
            RAISE_APPLICATION_ERROR(-20002, v_error_message);
        END IF;
        IF v_previous_record.id IS NULL THEN
            v_error_message := '{"type":"error","message":"Ajjaj! Valami nem jó."}';
            RAISE_APPLICATION_ERROR(-20002, v_error_message);
        ELSE
            IF TRUNC(:NEW.idopont) != TRUNC(v_previous_record.idopont) THEN
                v_error_message := '{"type":"warning","message":""}';
                RAISE_APPLICATION_ERROR(-20001, v_error_message);
            END IF;

            IF :NEW.idopont <= v_previous_record.idopont THEN
                v_error_message := '{"type":"warning","message":"A későbbi megálló ne legyen hamarabbi időponttal."}';
                RAISE_APPLICATION_ERROR(-20001, v_error_message);
            END IF;
        END IF;
    END IF;
EXCEPTION
    WHEN NO_DATA_FOUND THEN
        NULL;
    WHEN OTHERS THEN
        RAISE;
END;
