<footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Tienda Online - ITECCE &reg; 2022</div>
                </div>
            </div>
        </footer>
    </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        function onSubmitUsers(){
            var frm = document.getElementById('formUsers');
            var data = new FormData(frm);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function (){
                if (this.readyState == 4){
                    var msg = xhttp.responseText;
                    if (msg == 'success') {
                        window.location.href="index.php";
                        $('#newUser').modal('hide');
                    }else{
                        alert("Error...");
                    }
                }
            };
            xhttp.opne("POST", "uploadusers.php", true);
            xhttp.send(data);
            $('#formUsers').trigger('reset');
        }
        </script>
</html>