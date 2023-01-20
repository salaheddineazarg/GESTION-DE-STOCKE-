    document.getElementById('btnLogin').addEventListener("click", function(){
        localStorage.setItem('formLogin', 'yes');
    });
    document.getElementById('formClose').addEventListener("click", function(){
        localStorage.setItem('formLogin', 'no');
    });
    document.getElementById('formClose').addEventListener("click", function(){
        localStorage.setItem('formLogin', 'no');
    });

    window.addEventListener("load", function(){
        if( localStorage.getItem('formLogin') === 'yes'){
            document.getElementById('btnLogin').click();
        }
    });