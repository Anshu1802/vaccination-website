<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
    body {
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; 
        line-height: 1.5;
        font-size: 13px;
        color: #333333;
    }
    table, p {
        font-size: 13px;
    }
    table tr td:first-child {
        padding-right: 20px;
    }
    table tr {
        vertical-align: top
    }
    /*table tr td {
        padding-bottom: .4em;
        padding-top: .4em;
    }*/
    .note {
        font-size: 12px !important;
        color: #b3b3b3 !important;
        margin-top: 20px;
    }
    .footer-contact{
        font-size: 13px !important;
        margin-left: -2px;
    }
    </style>
</head>
<body>

    <!-- Header Start -->
    <!-- <div style="text-align: right;">
        <img src="https://www.dquip.com/images/logo-inner.png" alt="Dquip">
    </div> -->
    <!-- Header End -->

    <!-- Body Start -->
    <div>
        <p>Hello Ansh new user {{ $username }} have just filled serve form </p>

        <p>lets see whether the enter details are correct or not . Faith team will lead this form </p>

        {{-- <p><strong><a href="http://localhost:8000/validate/{{$data['id']}}" target="_blank">Click to activate your account</a></strong></p> --}}
    </div>
    <!-- Body End -->

    <!-- Footer Start -->
    <div>
        <br>
        
        

        <table class="footer-contact">
            <tr>
                <td>Contact Number</td>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <td>EMAIL ID</td>
                <td>{{ $email }}</td>
            </tr>
            <tr>
                <td>Address</td>
                <td>{{ $address }}</td>
            </tr>
            <tr>
                <td>Dose</td>
                <td>{{ $Dose }}</td>
            </tr>
           
            
        </table>
        </div>

        <!-- Footer End -->

    </body>
    </html>