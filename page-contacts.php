<?php require_once('header.php') ?>
		<!-- BREADCRUMBS -->
		<div class="page-header">
			<div class="container">
				<h1 class="page-title pull-left">Contactos</h1>
				<ol class="breadcrumb">
					<li><a href="index.php">Home</a></li>
					<li class="active"><a >Contactos</a></li>
				</ol>
			</div>
		</div>
		<!-- END BREADCRUMBS -->
		<!-- PAGE CONTENT -->
		<div class="page-content">
			<div class="container">
				<div class="row">
					<div class="col-md-9">							
						<div class="google-map sidebar-map">
							<div id="custom-map-canvas"></div>
						</div>
						</br>
						<p>Deixe-nos o seu contacto</p>
						<br>
						<!-- CONCTACT FORM -->
						<div class="contact-form-wrapper">
							<form id="contact-form" method="post" class="form-horizontal margin-bottom-30px" role="form" novalidate>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="contact-name" class="control-label sr-only">Name</label>
											<input type="text" class="form-control" id="contact-name" name="name" placeholder="Nome" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="contact-email" class="control-label sr-only">Company</label>
											<input type="text" class="form-control" id="contact-company" name="company" placeholder="Empresa" required>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<div class="form-group">
											<label for="contact-email" class="control-label sr-only">Email</label>
											<input type="email" class="form-control" id="contact-email" name="email" placeholder="Email" required>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group">
											<label for="contact-name" class="control-label sr-only">Number</label>
											<input type="text" class="form-control" id="contact-number" name="number" placeholder="Telefone" required>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="contact-subject" class="control-label sr-only">Subject</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" id="contact-subject" name="subject" placeholder="Assunto">
									</div>
								</div>
								<div class="form-group">
									<label for="contact-message" class="control-label sr-only">Message</label>
									<div class="col-sm-12">
										<textarea class="form-control" id="contact-message" name="message" rows="5" cols="30" placeholder="Mensagem" required style="resize:vertical; max-height:450px;"></textarea>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<button id="submit-button" type="submit" class="btn btn-primary"><i class="fa loading-icon"></i> <span>Enviar Mensagem</span></button>
									</div>
								</div>
								<input type="hidden" name="msg-submitted" id="msg-submitted" value="true">
							</form>
						</div>
						<!-- END CONCTACT FORM -->
					</div>
					<div class="col-md-3">
						<!-- RIGHT SIDEBAR CONTENT -->
						<div class="widget">
							<h3 class="widget-title">INFORMAÇÃO DE CONTACTO</h3>
							<ul class="contact-info fa-ul">
								<li><i class="fa fa-li fa-building-o"></i> Rua Maria Custódia Pereira da Silva, 24</br>Zona Industrial da Maia I, Sector IV</br>Apartado 6080 Tecmaia</br>4470-461 Maia</br>Portugal</li>
								<li><i class="fa fa-li fa-phone"></i><a href="tel:+351229478710"> (+351) 229 478 710</a></li>
								<li><i class="fa fa-li fa-mobile"></i><a href="tel:+351925901006"> (+351) 925 901 006</a></li>
								<li><i class="fa fa-li fa-fax"></i> (+351) 229 478 719</li>
								<li><i class="fa fa-li fa-envelope-o"></i> <a href="mailto:info@importinox.com">info@importinox.com</a></li>
							</ul>
						</div>
						<div class="widget">
							<h3 class="widget-title">GPS - Coordenadas</h3>
							<a target="_blank" href="http://maps.google.com/maps?f=d&amp;source=s_d&amp;saddr=&amp;daddr=IMPORTINOX %4041.256565,-8.641117&amp;hl=pt-PT&amp;geocode=&amp;mra=mift&amp;sll=41.255968,-8.63888&amp;sspn=0.005033,0.011319&amp;ie=UTF8&amp;t=h&amp;ll=41.256767,-8.641112&amp;spn=0.005033,0.011319&amp;z=17"><i class="fa fa-location-arrow footer-icon"></i>&nbsp;&nbsp;GPS: 41º15'23N & 8º38'27W</a>
						</div>
						<div class="widget">
							<h3 class="widget-title">HORÁRIO LABORAL</h3>
							<ul class="list-unstyled">
								<li><strong>Segunda-Sexta: </strong> 09h00 às 18h00</li>
								<li><strong>Sábado: </strong> Fechado</li>
								<li><strong>Domingo: </strong> Fechado</li>
							</ul>
						</div>
						<!-- END RIGHT SIDEBAR CONTENT -->
					</div>
				</div>
			</div>
		</div>
		<!-- END PAGE CONTENT -->
<?php require_once('footer.php') ?>