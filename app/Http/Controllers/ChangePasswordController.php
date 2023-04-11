<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{
    public function showChangePasswordForm()
    {

        return view('changePassword');
    }

    public function ChangePassword (Request $request) {
        $felhasznalok = Auth::user();

        $current_password = $request->input('current_password');
        $new_password = $request->input('new_password');
        $new_password_confirmation = $request->input('new_password_confirmation');

        if (!Hash::check($current_password, $felhasznalok->getAuthPassword())) {
            return redirect()->back()->with('error', 'The current password is incorrect.');
        }

        if ($new_password !== $new_password_confirmation) {
            return redirect()->back()->with('error', 'The new password and its confirmation do not match.');
        }

        DB::table('felhasznalo')->where('id', $felhasznalok->getAuthIdentifier())->update(['jelszo' => Hash::make($new_password)]);

        return redirect()->back()->with('success', 'The password has been changed.');
    }
}
