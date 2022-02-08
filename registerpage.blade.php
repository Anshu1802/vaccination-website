<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


    * {box-sizing: border-box;}
        
        body { 
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
          background: transparent url('/images/p9.png')  ;
        
        }
        
        .header {
          overflow: hidden;
          background-color: #f1f1f1;
          padding: 20px 10px;
        }
        
        .header a {
          float: left;
          color: black;
          text-align: center;
          padding: 12px;
          text-decoration: none;
          font-size: 18px; 
          line-height: 25px;
          border-radius: 4px;
        }
        
        .header a.logo {
          font-size: 25px;
          font-weight: bold;
        }
        
        .header a:hover {
          background-color: #ddd;
          color: black;
        }
        
        .header a.active {
          background-color: rgb(130, 123, 228);
          color: white;
        }
        
        .header-right {
          float: right;
        }
        
        @media screen and (max-width: 500px) {
          .header a {
            float: none;
            display: block;
            text-align: left;
          }
          
          .header-right {
            float: none;
          }
        }
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>

  <div class="header">
    <a href="#default" class="logo">Ansh's Servey</a>
    <div class="header-right">
      <a href="{{ URL('/') }}">Home</a>
      <a class="active" href="{{ url('/register') }}">servey form</a>
      <a href="{{ url('/about') }}">contact us?</a>
      <a href="{{  url('https://www.cowin.gov.in/')}}">Register at cowin</a>
    </div>
  </div>
      <form action="{{ url('/submi') }}" method="POST" style="max-width:500px;margin:auto">
        @csrf
      <h2>register page</h2>
    
    
    
    
    
    
    
    
    
      <div class="input-container">
        <i class="fa fa-user icon"></i>
        <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" type="text" placeholder="Username" name="username" >
        
        @if ($errors->has('username'))
        <span class="invalid feedback"role="alert">
            <strong>{{ $errors->first('username') }}.</strong>
        </span>
         @endif
      </div>
    
      <div class="input-container">
        <i class="fa fa-envelope icon"></i>
        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" type="text" placeholder="Email" name="email" >
        @if ($errors->has('email'))
        <span class="invalid feedback"role="alert">
            <strong>{{ $errors->first('email') }}.</strong>
        </span>
    @endif
        </div>
    
      <div class="input-container">
        <i class='fa fa-phone icon'></i>
        <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" type="text" placeholder="Phone" name="phone" >
        @if ($errors->has('phone'))
        <span class="invalid feedback"role="alert">
            <strong>{{ $errors->first('phone') }}.</strong>
        </span>
    @endif
      </div>
    
      <div class="input-container">
        <i class='fa fa-car icon'></i>
        <input class="input-field,form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" type="text" placeholder="Address" name="address" >
        @if ($errors->has('address'))
        <span class="invalid feedback"role="alert">
            <strong>{{ $errors->first('address') }}.</strong>
        </span>
    @endif
      </div>
    
      <div class="input-container">
        <i class='fa fa-eye icon'></i>
        <input class="input-field,form-control{{ $errors->has('aadhar') ? ' is-invalid' : '' }}" type="text" placeholder="Aadhar card No" name="aadhar" >
        @if ($errors->has('aadhar'))
        <span class="invalid feedback"role="alert">
            <strong>{{ $errors->first('aadhar') }}.</strong>
        </span>
    @endif
      </div>
    
    
      <div class="input-container">
        <i class='fa fa-child icon'></i>
      <select class="input-field,form-control{{ $errors->has('vacinated_dose') ? ' is-invalid' : '' }}"  name="vacinated_dose"  >
        <option value=""disabled selected hidden>Number of Doses done ?</option>
        <option value="0">None</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        
      </select>
      
      </div>
      
     
      
      <div class="input-container">
        <i class='fa fa-plus-square icon'></i>
      <select class="input-field,form-control{{ $errors->has('Dose') ? ' is-invalid' : '' }}"  name="Dose"  >
        <option value=""disabled selected hidden> Choose Company name ?</option>
        <option value="covisheid">Covisheild (1 or 2 dose)</option>
        <option value="covaxine">Covaxine (1 or 2 dose )</option>
        <option value="sputnik"> Sputnik V (1 dose)</option>
        
      </select>
      </div>
    
       
    
      <div class="input-container">
        <i class='fa fa-heartbeat icon'></i>
        <input class="form-control{{ $errors->has('symptom') ? ' is-invalid' : '' }}" type="textarea" placeholder="symptom after vaccine ifany ?" name="symptom" >
        @if ($errors->has('symptom'))
        <span class="invalid feedback"role="alert">
            <strong>{{ $errors->first('symptom') }}.</strong>
        </span>
    @endif
      </div>
          
      
    
      
    
      
    
      <button type="submit" value="submit" class="btn">Start verify</button>
    </form>


</body>
</html>
