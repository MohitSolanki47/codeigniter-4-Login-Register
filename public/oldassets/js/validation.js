function registration_form()
{   
    // alert('hello'); return false;
    var err_sign_up = 0;
    var f_name = document.getElementById('First_Name').value;
    alert(f_name); 
    if(f_name == "")
    { 
        document.getElementById('error_First_Name').innerHTML = "Invalid First Name";
        err_sign_up++;
    }
    else
    {
        var f_name = f_name.replace(/  +/g, ' ');
        var chk_space = f_name.charAt(0);
        
        if(f_name == "" || f_name == " " || chk_space == " ")
        {
            document.getElementById('error_First_Name').innerHTML = "White space not allowed";
            err_sign_up++;
        }
       else
        {
            document.getElementById('error_First_Name').innerHTML = "";
        }
    }

    return false;

    // Phone number
    var phone = document.getElementById('sign_up_mobile').value;
    if(!/^\d{10}$/.test(phone))
    {
        document.getElementById('err_signup_phone').innerHTML = "Invalid Mobile Number";
        err_sign_up++;
    }
    else
    {
        var phone = phone.replace(/  +/g, ' ');
        var chk_space = phone.charAt(0);
        
        if(phone == "" || phone == " " || chk_space == " ")
        {
            document.getElementById('err_signup_phone').innerHTML = "White space not allowed";
            err_sign_up++;
        }
        else
        {
            document.getElementById('err_signup_phone').innerHTML = "";
        }
    }

    if(err_sign_up != 0)
    {
        return false;
    }
    else
    {
        return true;
    }

}