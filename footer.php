    <hr>
<footer>
        <p>� KeepCat Company 2014</p>
      </footer>

    </div><!--/.container-->


    <script type="text/javascript">
        var loginMenu = Array();
        var divLogin;
        window.onload = function(){
            loginMenu = document.getElementsByClassName('login');
            divLogin = document.getElementById('div_login');
        };
        
        function activeMe(elem, name){
            
            for(var i=0; i < loginMenu.length; i++){
                if(loginMenu[i] !== elem){
                    loginMenu[i].className = loginMenu[i].className.replace(' active', "");     
                }
            }
            if(elem.className.indexOf('active') == -1){
                elem.className += " active";
                divLogin.style.display = 'block';
                
            }
            else{
                divLogin.style.display = 'none';
                elem.className = elem.className.replace(' active', "");
            }
        }
        
        
    </script>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>



<div id="spreed-overlay"><img src="chrome-extension://ipikiaejjblmdopojhpejjmbedhlibno/close_icon.png" style="float: left; margin-bottom: 3px; position: absolute; left: 0px; top: 0px; cursor: pointer;"><a style="cursor: pointer;">&lt; 1 min to Spreed</a></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="JS/bootstrap.min.js"></script>
    </body>
</html>