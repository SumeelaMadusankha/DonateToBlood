function doCalculate(elm)

    {
        var nic = document.getElementById('nic').value;
        var gender = document.getElementById('gender');
        var dob = document.getElementById('dob');
        var pattern = /[0-9]{9}[V|X|v|x]/;
        var newId = false;
        var NIC;
        if(nic.length == 12){
            
           NIC = nic.substr(2,5) + nic.substr(8,12);
           nic = NIC + "v";

         }
        if (!pattern.test(nic))
        {
            gender.innerHTML = '';
            dob.innerHTML = '';
            alert('Invalid NIC number');
            return false;
        }
        let date =  new Date().getFullYear();
        let yr = date.toString();
        if (nic.substr(0,2) < yr.substring(0,2)){
            newId = true;
            
        }
        var mon =
                {
                    "1": ["01", 31],
                    "2": ["02", 29],
                    "3": ["03", 31],
                    "4": ["04", 30],
                    "5": ["05", 31],
                    "6": ["06", 30],
                    "7": ["07", 31],
                    "8": ["08", 31],
                    "9": ["09", 30],
                    "10": ["10", 31],
                    "11": ["11", 30],
                    "12": ["12", 31]
                };
        if (nic.length >= 5)
        {
            if (newId){
                year = "20" + nic.substr(0, 2);
            }else{
                year = "19" + nic.substr(0, 2);
            }
            
            days = parseInt(nic.substr(2, 3));
            if (days > 500)
            {
                gender.innerHTML = "Female";
                days = days - 500;
            }
            else
            {
                gender.innerHTML = "Male";
            }
            var key;
            for (key in mon)
            {
                if (days > mon[key][1])
                {
                    days = days - mon[key][1];
                }
                else
                {
                    break;
                }
            }
            if (days < 10)
            {
                days = "0" + days;
            }
            dob.innerHTML =  year + "-" + mon[key][0] + "-" + days ;
        }
        return false;
    }