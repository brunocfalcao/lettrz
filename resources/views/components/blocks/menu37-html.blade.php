{{--

MENU 37 - Horizontal menu, with
	"View in Browser" (url auto-generated)
	Logo (125 x 25) + url
	Custom caption (default is current date), max approx 20 chars

$mail->add('menu37', [
	'caption' => 'Your right sidehand text', default date('F j, Y')
]);

--}}
<!--Menu 37 Start-->
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="{{ $parameters['background-color'] }}">
    <tr>
        <td align="center" valign="top">
            <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" class="main" bgcolor="#FFFFFF">
                <tr>
                    <td align="left" valign="top">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center" valign="top" bgcolor="{{ $parameters['foreground-color'] }}">
                                    <table width="600" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
                                        <tr>
                                            <td height="25" align="left" valign="top" style="font-size:25px; line-height:25px;">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align="left" valign="top">
                                                <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                    <tr>
                                                        <td width="140" align="left" valign="top" class="two-left">
                                                            <table border="0" align="center" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td align="center" valign="top" style="font-family: 'Work Sans', Calibri, sans-serif; font-size:15px; font-weight:normal; color:#FFF; line-height:25px;" mc:edit="um1-189">
                                                                        <multiline><a href="{{ url(config('lettrz.view-in-browser.path')) . '/' . $uuid }}" style="text-decoration:none; color:#FFF;">View in  Browser</a></multiline>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td height="15" align="left" valign="top" style="font-size:15px; line-height:15px;">&nbsp;</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td width="420" align="center" valign="top" class="two-left">
                                                            <table border="0" align="center" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td align="center" valign="top"><a href="{{ $parameters['app-url'] }}"><img mc:edit="um1-190" editable="true" src="{{ $parameters['logo-125x25'] }}" width="125" height="25" alt="" /></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="center" valign="top">&nbsp;</td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                        <td width="140" align="left" valign="top" class="two-left">
                                                            <table  border="0" align="center" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td height="2" align="left" valign="top" style="font-size:2px; line-height:2px;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td align="center" valign="top" style="font-family: 'Work Sans', Calibri, sans-serif; font-size:15px; font-weight:bold; color:#FFF; line-height:25px;" mc:edit="um1-191">
                                                                        <multiline>{{ $parameters['caption'] ?? date('F j, Y') }}</multiline>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="10" align="left" valign="top" style="font-size:10px; line-height:10px;">&nbsp;</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--Menu 37 End-->