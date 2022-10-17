<!DOCTYPE html>
<html>
     <head>
          <title>Test</title>
          <meta charset="utf-8"/>
     </head>
     <body>
        <a href="*" id="tester"> Tester</a>
        <script type="text/javascript">1
            document.getElementById('tester')
                    .addEventListener('click', () =>{ 
                    let reqinit = {
                        "credentials": "omit",
                        "headers":"GET",
                        "mode": "cors"

                    };
                    fetch('http://192.168.112.135/ping', reqinit)
                    .then((r) => { let name= window.prompt('Bonjour entrée votre prénom, anonymous');
                            console.log(r);  })
                    .catch((err) => {window.alert('401 Unauthorized');
                    var result = prompt("Veuillez choisir un login ");
                        /*console.error(err);});*/


                        

                              
}
                    
                      });
        </script>
     </body>
</html>
