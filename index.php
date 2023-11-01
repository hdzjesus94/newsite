<?php 
    $title= 'Index';
    require_once 'include/header.php'
?>
<!-- 
    -First Name
    -Last Name
    -Date of Birth (Use Date Picker)
    -Speciality (Database admin, Software Developer, Web Administrator, Other)
    -Email Addres
    -Contact Number
-->
    <h1 class="text-center">Registration for IT Conference</h1>
    <form method="get" action="success.php">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstname">
        </div>
        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastname">
        </div>
        <div class="mb-3">
            <label for="dob" class="form-label">Date Of Birth</label>
            <input type="text" class="form-control" id="dob">
        </div>
        <div class="mb-3">
            <label for="specialty">Area of Expertise</label>
            <select class="form-select" id="specialty">
                <option selected>Database Admin</option>
                <option value="1">Software Developer</option>
                <option value="2">Web Administrator</option>
                <option value="3">Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" placeholder="Enter a email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else</small>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Contact Number</label>
            <input type="text" class="form-control" id="phone" aria-describedby="phoneHelp">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else</small>
        </div>
   
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

<?php require_once 'include/footer.php'?>