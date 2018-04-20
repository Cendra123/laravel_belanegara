    <footer id="footer">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12 text-center bottom-separator">
    				<img src="{{ asset('images/home/under.png') }}" class="img-responsive inline" alt="img">
    			</div>
    			<div class="col-md-4 col-sm-6">
    			</div>
    			<div class="col-md-3 col-sm-6">
    				<div class="contact-info bottom">
    					<h2>Contacts</h2>
    					<address>
    						E-mail: <a href="cs@belanegaraku.id">cs@belanegaraku.id</a> <br> 

    					</address>

    					<h2>Address</h2>
    					<address>
    						Universitas Airlangga,<br> Jl. Mulyorejo, Mulyorejo  <br> Kota Surabaya <br> Jawa Timur 60115

    					</address>
    				</div>
    			</div>
    			<div class="col-md-4 col-sm-12" style="margin-left: 15px;">
    				<div class="contact-form bottom">
    					<h2>Send a message</h2>
    					<form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
    						<div class="form-group">
    							<input type="text" name="name" id="name" class="form-control" required="required" placeholder="Name">
    						</div>
    						<div class="form-group">
    							<input type="email" name="email" id="email" class="form-control" required="required" placeholder="Email">
    						</div>
    						<div class="form-group">
    							<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Kritik dan Saran"></textarea>
    						</div>                        
    						<div class="form-group">
    							<input type="button" id="submit" name="submit" class="btn btn-submit" value="Submit">
    						</div>
    					</form>
    				</div>
    			</div>
    			<div class="col-sm-12">
    				<div class="copyright-text text-center">
                        <!-- <p>&copy; All Rights Reserved.</p>
                        	<p>Crafted by <a target="_blank" href="http://designscrazed.org/">Allie</a></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->

        <script type="text/javascript">
        	$(document).ready(function () {
            // body...
            $('#submit').click(function (e) {
                // body...
                e.preventDefault();

                var data = {

                	'name' : $('#name').val(),

                	'email' : $('#email').val(),

                	'message' : $('#message').val()

                }

                $.ajax({
                	url : /,
                	type: "POST",
                	data : data,
                	success: function(data, textStatus, jqXHR)
                	{
        //data - response from server
        console.log(data);

        var hasil = $.parseJSON(data);

        if(hasil.hasil==1){

        	alert('Kritik dan Saran berhasil di simpan');

        	$('#name').val('');

        	$('#email').val('');

        	$('#message').val('');

        }
        else{

        	alert('Keritik dan Saran tidak berhasil di simpan');


        }

    },
    error: function (jqXHR, textStatus, errorThrown)
    {

    }
});

                //console.log(data);
            });
        })
    </script>