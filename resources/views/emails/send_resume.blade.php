<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,500,700" type="text/css" rel="stylesheet">
    <link href="{{ url('public/css/email_styles.css') }}" type="text/css" rel="stylesheet">
    <title>LionGlobal</title>
</head>
<body style="background: rgba(0,0,0,0.05);">
    <div style="width: 600px; margin: 0 auto; background: #fff; padding: 0 70px; box-sizing: border-box; box-shadow: 0 0 10px rgba(0,0,0,0.5);">
        <div style="font-size: 18px;  font-family: 'Open Sans', sans-serif;  color: #D0021B;  font-weight: 700;  letter-spacing: 5px;  text-align: center;  text-transform: uppercase;  padding-top: 80px;">New Request</div>
        <div style="font-size: 28px;  line-height: 42px;  font-family: 'Poppins', sans-serif;  color: #000000;  font-weight: 500;  text-align: center;  padding: 35px 60px 0;">We have received a new submission.</div>
        <div style="padding: 100px 0 0;">
            <p style="font-size: 18px;  line-height: 27px;  font-family: 'Poppins', sans-serif;  color: #000000;  font-weight: 600;  text-align: left;  padding: 0;  margin: 0;">{{ $info->available }}</p>
            <p style="font-size: 18px;  line-height: 27px;  font-family: 'Poppins', sans-serif;  color: #000000;  font-weight: 400;  text-align: left;  padding: 0;  margin: 0;">{{ $info->industry }}</p>
            <p style="font-size: 18px;  line-height: 27px;  font-family: 'Poppins', sans-serif;  color: #000000;  font-weight: 400;  text-align: left;  padding: 0;  margin: 0;">{{ $info->position }}</p>
            <br>
            <p style="font-size: 18px;  line-height: 27px;  font-family: 'Poppins', sans-serif;  color: #000000;  font-weight: 600;  text-align: left;  padding: 0;  margin: 0; text-transform: capitalize">{{ $info->nationality }}</p>
            <br>
            <p style="font-size: 18px;  line-height: 27px;  font-family: 'Poppins', sans-serif;  color: #000000;  font-weight: 400;  text-align: left;  padding: 0;  margin: 0; text-transform: capitalize">{{ $info->username }}</p>
            <p style="font-size: 18px;  line-height: 27px;  font-family: 'Poppins', sans-serif;  color: #000000;  font-weight: 400;  text-align: left;  padding: 0;  margin: 0;">{{ $info->phone }}</p>
            <p style="font-size: 18px;  line-height: 27px;  font-family: 'Poppins', sans-serif;  color: #000000;  font-weight: 400;  text-align: left;  padding: 0;  margin: 0;"><a href="mailto:{{ $info->email }}" style="color: #000000; text-decoration: none; outline: none; text-transform: lowercase;`">{{ $info->email }}</a></p>
        </div>
        @if( !empty($info->filename) )
            <div style="width: fit-content;  padding: 140px 0 0;  margin: 0 auto;">
                <a href="{{ url('public/resume_files/' . $info->filename) }}" style="display: inline-block;  background: #DB1E3D;  font-size: 12px;  line-height: 17px;  font-family: 'Open Sans', sans-serif;  font-weight: 600;  letter-spacing: 1.5px;  color: #fff;  text-transform: uppercase;  text-decoration: none;  padding: 22px 62px 21px;  margin: 0 auto;  transition: all 0.4s;  cursor: pointer">Download resume</a>
            </div>
        @endif
        @if( empty($info->filename) )
            <div style="width: fit-content;  padding: 140px 0 0;  margin: 0 auto;">
                <a href="javascript:void(0)" style="display: inline-block;  background: #BABABA;  font-size: 12px;  line-height: 17px;  font-family: 'Open Sans', sans-serif;  font-weight: 600;  letter-spacing: 1.5px;  color: #fff;  text-transform: uppercase;  text-decoration: none;  padding: 22px 62px 21px;  margin: 0 auto;  transition: all 0.4s;  cursor: pointer;">Download resume</a>
            </div>
        @endif
    </div>
</body>
</html>