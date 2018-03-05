<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel = "stylesheet" type = "text/css" href = "Registerstyle.css">
</head>
<body>
  <div class = "Header">
    <h3 class = "letter">Personal Information</h3>
  </div>

  <form method = "post" action = "Registrationform.php">
    <div class = "body">
      <div class = "form-group">
        <label>First Name <strong class = "asterisk">*</strong></label>
            <input type = "text" name = "firstname" class = "box1" placeholder="    Enter your First Name">
      </div>
      <div class = "form-group">
        <label>Last Name <strong class = "asterisk">*</strong></label>
          <input type = "text" name = "lastname" class = "box2" placeholder="   Enter your Last Name">
      </div>
      <div class = "form-group">
        <label>Middle Initial <strong class = "asterisk">*</strong></label>
        <input type = "text" name = "middleinitial" class = "box3" placeholder="    Enter your Middle Initial">
      </div>
      <div class = "form-group">
        <label>Gender <strong class = "asterisk">*</strong></label>
        <select class = "box4">
          <option></option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </div>
      <div class = "form-group">
        <label>Date of Birth <strong class = "asterisk">*</strong></label>
          <select class = "box5">
            <option></option>
            <option>January</option>
            <option>February</option>
            <option>March</option>
            <option>April</option>
            <option>May</option>
            <option>June</option>
            <option>July</option>
            <option>August</option>
            <option>September</option>
            <option>October</option>
            <option>November</option>
          <option>December</option>
        </select>
        <select class = "box6">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>13</option>
            <option>14</option>
            <option>15</option>
            <option>16</option>
            <option>17</option>
            <option>18</option>
            <option>19</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>23</option>
            <option>24</option>
            <option>25</option>
            <option>26</option>
            <option>27</option>
            <option>28</option>
            <option>29</option>
            <option>30</option>
            <option>31</option>
          </select>
          <input type = "text" name = "year" class = "box7" placeholder="   Enter Year">
        </div>
        <label class = "labelclass"><small><em>Month</em></small></label>
        <label class = "labelclass1"><small><em>Day</em></small></label>
        <label class = "labelclass3"><small><em>Year</em></small></label>
        <div class = "form-group">
          <label>Email Address <strong class = "asterisk">*</strong></label>
          <input type = "text" name = "email" class = "Emailbox" placeholder ="   Yourname@example.com">
        </div>
        <div class = "form-group">
          <label>Contact Number <strong class = "asterisk">*</strong></label>
          <input type = "text" name = "contact" class = "box8" placeholder ="   Contact Number">
        </div>
        <div class = "form-group">
          <label>Username <strong class = "asterisk">*</strong></label>
          <input type = "text" name = "username" class = "userbox" placeholder ="   Enter Username">
        </div>
        <div class = "form-group">
          <label>Password <strong class = "asterisk">*</strong></label>
          <input type = "password" name = "password" class = "passbox" placeholder ="   Enter Password">
        </div>
        <div class = "form-group">
          <label>Confirm password <strong class = "asterisk">*</strong></label>
          <input type = "password" name = "confpassword" class = "confbox" placeholder ="   Confirm Password">
        </div>
        <div class="form-group">
          <label><input type="radio" name="optradio" class = "optradio">I agree to the terms and conditions.</label>
        </div>
        <div class = "input-group">
    			<button type = "submit" name = "register" class = "btn">Register</button>
    		</div>
    </div>
  </form>
