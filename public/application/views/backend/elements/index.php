<!-- Morris.js charts -->
<link rel="stylesheet" href="<?=BASE_GERENCIADOR?>/plugins/morris/morris.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?=BASE_GERENCIADOR?>/plugins/morris/morris.min.js"></script>

<script>
	$(function () {

		var area = new Morris.Area({
			element: 'revenue-chart',
			resize: true,
			data: [
				{y: '2011 Q1', item1: 2666, item2: 2666},
				{y: '2011 Q2', item1: 2778, item2: 2294},
				{y: '2011 Q3', item1: 4912, item2: 1969},
				{y: '2011 Q4', item1: 3767, item2: 3597},
				{y: '2012 Q1', item1: 6810, item2: 1914},
				{y: '2012 Q2', item1: 5670, item2: 4293},
				{y: '2012 Q3', item1: 4820, item2: 3795},
				{y: '2012 Q4', item1: 15073, item2: 5967},
				{y: '2013 Q1', item1: 10687, item2: 4460},
				{y: '2013 Q2', item1: 8432, item2: 5713}
			],
			xkey: 'y',
			ykeys: ['item1', 'item2'],
			labels: ['Item 1', 'Item 2'],
			lineColors: ['#a0d0e0', '#3c8dbc'],
			hideHover: 'auto'
		});

		var line = new Morris.Line({
			element: 'chart-donut',
			resize: true,
			data: [
				{y: '2011 Q1', item1: 2666},
				{y: '2011 Q2', item1: 2778},
				{y: '2011 Q3', item1: 4912},
				{y: '2011 Q4', item1: 3767},
				{y: '2012 Q1', item1: 6810},
				{y: '2012 Q2', item1: 5670},
				{y: '2012 Q3', item1: 4820},
				{y: '2012 Q4', item1: 15073},
				{y: '2013 Q1', item1: 10687},
				{y: '2013 Q2', item1: 8432}
			],
			xkey: 'y',
			ykeys: ['item1'],
			labels: ['Item 1'],
			lineColors: ['#efefef'],
			lineWidth: 2,
			hideHover: 'auto',
			gridTextColor: "#fff",
			gridStrokeWidth: 0.4,
			pointSize: 4,
			pointStrokeColors: ["#efefef"],
			gridLineColor: "#efefef",
			gridTextFamily: "Open Sans",
			gridTextSize: 10
		});

		var donut = new Morris.Donut({
			element: 'sales-chart',
			resize: true,
			colors: ["#3c8dbc", "#f56954", "#00a65a"],
			data: [
				{label: "Download Sales", value: 12},
				{label: "In-Store Sales", value: 30},
				{label: "Mail-Order Sales", value: 20}
			],
			hideHover: 'auto'
		});

		var bar = Morris.Bar({
			element: 'bar-chart',
			data: [
				{ y: 'Janeiro', a: 100 },
				{ y: 'Fevereiro', a: 75 }
			],
			xkey: 'y',
			ykeys: ['a'],
			labels: ['Vendas']
		});

	});
</script>

<section class="content-header">
	<h1>
		<?=$this->titulo?>
		<?if(isset($this->subtitulo)){?>
			<small><?=$this->subtitulo?></small>
		<?}?>
	</h1>
	<ol class="breadcrumb">
		<li><a href="<?=BASE_GERENCIADOR?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
		<li><a href="<?=BASE_GERENCIADOR.$this->controller?>"><?=$this->titulo?></a></li>
		<li class="active">Detalhe</li>
	</ol>
</section>

<section class="content">

	<div class="row">
		<div class="col-xs-6">
			<div class="box">
				<div class="box-body">

					<div class="chart" id="revenue-chart" style="position: relative; height: 300px;"></div>

				</div>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="box">
				<div class="box-body">

					<div class="chart" id="bar-chart" style="position: relative; height: 300px;"></div>

				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-6">
			<div class="box">
				<div class="box-body">

					<div class="chart" id="chart-donut" style="position: relative; height: 300px;"></div>

				</div>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="box">
				<div class="box-body">

					<div class="chart" id="sales-chart" style="position: relative; height: 300px;"></div>

				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12">
			<div class="box">

				<div class="box-body">
					<form action="" method="post" role="form" data-parsley-validate>

						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label for="nome">Nome*</label>
									<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label for="email">E-mail*</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label for="senha">Senha*</label>
									<input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
								</div>
							</div>
							<div class="col-md-5">
								<div class="form-group">
									<label for="confirme_senha">Confirme a senha*</label>
									<input type="text" class="form-control" name="confirme_senha" id="confirme_senha" placeholder="Confirme a senha" required>
								</div>
							</div>
						</div>


						<div class="box-footer text-center">
							<button type="submit" class="btn btn-primary margin">Salvar</button>
						</div>

					</form>

				</div> <!-- /.box-body -->
			</div> <!-- /.box -->

		</div>
	</div> <!-- /.row -->

	<div class="row">
		<div class="col-xs-12">
			<h4>Upload de Arquivos</h4>
			<div class="box">
				<div class="box-body">

					<form action="" method="post" role="form">

						<div class="gallery-container" data-url-upload="<?=BASE_GERENCIADOR.$this->controller?>/upload" data-input-hidden-name="arquivoGaleria">

							<span class="btn btn-success fileinput-button">
								<i class="glyphicon glyphicon-plus"></i>
								<span>Selecione os arquivos...</span>
								<input class="file-upload" type="file" name="files[]" multiple>
							</span>

							<div class="progress progress-sm active">
								<div class="progress-bar progress-bar-primary progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
									<span class="sr-only"></span>
								</div>
							</div>

							<div class="gallery clearfix">
								<ul>
									<?if(isset($_SESSION[$this->projeto."_".$this->pasta."_arquivos"]) && !empty($_SESSION[$this->projeto."_".$this->pasta."_arquivos"])){
										foreach($_SESSION[$this->projeto."_".$this->pasta."_arquivos"] as $arquivo){
											$arquivoCompleto = $arquivo['file'].".".$arquivo['extension'];?>

											<?$img = $this->redimensionaImagem($arquivo['file'], "imagens/teste", "128", "128", "resize_crop");?>

											<?if($img){?>

												<li class="gallery-item" data-id="<?=$arquivo['file']?>">
												    <img alt="" src="<?=$img?>" <?if(strstr($img, ".png")){?> width="128" <?}?> >
													<a href="#" class="btn btn-danger btn-sm btn-gallery-remove-item">Excluir</a>
													<input type="hidden" name="arquivoGaleria[]" value="<?=$arquivo['file']?>">
												</li>

											<?}else if($this->caminhoDoArquivo($arquivo['file'].".".$arquivo['extension'], "imagens/teste")){?>

												<li class="gallery-item" data-id="<?=$arquivo['file']?>">
													<div class="gallery-item-info">
														<i class="fa fa-book"></i>
														<a target="_blank" href="<?=$this->caminhoDoArquivo($arquivo['file'].".".$arquivo['extension'], "imagens/teste")?>"><?=$arquivo['file'].".".$arquivo['extension']?></a>
													</div>
													<a href="#" class="btn btn-danger btn-sm btn-gallery-remove-item">Excluir</a>
													<input type="hidden" name="arquivoGaleria[]" value="<?=$arquivo['file']?>">
												</li>


											<?}?>

									  <?}
									}?>
								</ul>
							</div> <!-- /.gallery -->

						</div> <!-- /.gallery-container-->

					</form>

				</div>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="col-xs-12">
			<h4>Format slug</h4>
			<div class="box">
				<div class="box-body">

					<form action="" method="post" role="form" data-parsley-validate>

						<!-- FORMAT SLUG -->
						<div class="row clone-item">
							<div class="col-md-3">
								<div class="form-group">
									<label for="nome">Título</label>
									<input type="text" class="form-control" name="titulo" placeholder="Título" required data-id-slug-generator="url">
								</div>
							</div>
							<div class="col-md-3">
								<div class="form-group">
									<label for="nome">www.teste.com.br/</label>
									<input type="text" class="form-control" name="url" placeholder="Url" id="url" data-valid-input-backend="<?=BASE_GERENCIADOR.$this->controller?>/unicidade/false" required>
								</div>
							</div>
						</div>



					</form>

				</div> <!-- /.box-body -->
			</div> <!-- /.box -->

		</div>
	</div> <!-- /.row -->



	<div class="row">
		<div class="col-xs-12">
			<h4>Input with Backend integration - Success/Error ("data-input-backend")</h4>
			<div class="box">
				<div class="box-body">

					<form action="" method="post" role="form" data-parsley-validate>

						<!-- FORMAT SLUG -->
						<div class="row clone-item">
							<div class="col-md-3">
								<div class="form-group">
									<label for="nome">E-mail</label>
									<input type="email" class="form-control" name="email" placeholder="E-mail" data-valid-input-backend="<?=BASE_GERENCIADOR.$this->controller?>/unicidade/false" required>
								</div>
							</div>
						</div>



					</form>

				</div> <!-- /.box-body -->
			</div> <!-- /.box -->

		</div>
	</div> <!-- /.row -->



	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-body">

					<form action="" method="post" role="form" data-parsley-validate>

						<div class="form-group">
							<label for="nome">Grande</label>
							<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
						</div>

						<div class="row">
							<div class="col-md-5">
								<div class="form-group">
									<label for="nome">Médio</label>
									<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="nome">Pequeno</label>
									<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-3">
								<div class="form-group">
									<label for="nome">Arquivo</label>
									<input type="file" class="form-control" id="arquivo" name="arquivo" placeholder="Nome" required>
								</div>
							</div>
						</div>



						<!-- CLONE -->
						<!--
							// Estrutura para clone
							-- .clone-container
							------ .clone-item
						-->
						<div class="clone-container">
							<div class="form-group">
								<div class="btn-group">
									<button type="button" class="btn btn-success btn-clone-add">adicionar campo</button>
									<button type="button" class="btn btn-danger btn-clone-remove">remover campo</button>
								</div>
							</div>

							<div class="row clone-item">
								<div class="col-md-3">
									<div class="form-group">
										<label for="nome">Campo fulano</label>
										<input type="text" class="form-control" name="campoFulano[]" placeholder="Campo fulano" required>
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="nome">Campo ciclano</label>
										<input type="text" class="form-control" name="campoCiclano" placeholder="Campo ciclano" required>
									</div>
								</div>
							</div>

						</div>


						<div class="box-footer text-center">
							<button type="reset" class="btn btn-danger margin">Cancelar/Resetar</button>
							<button type="submit" class="btn btn-primary margin">Salvar</button>
						</div>

					</form>

				</div> <!-- /.box-body -->
			</div> <!-- /.box -->

		</div>
	</div> <!-- /.row -->


	<div class="row">
		<div class="col-xs-12">

			<div class="nav-tabs-custom">

				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab_1" data-toggle="tab">Tab 1</a></li>
					<li><a href="#tab_2" data-toggle="tab">Tab 2</a></li>
					<li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
				</ul>

				<div class="tab-content">

					<div class="tab-pane active" id="tab_1">
						<b>How to use:</b>
						<p>Exactly like the original bootstrap tabs except you should use the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
					</div><!-- /.tab-pane -->

					<div class="tab-pane" id="tab_2">
						<p>The European languages are members of the same family. Their separate existence is a myth.</p>
					</div><!-- /.tab-pane -->

					<div class="tab-pane" id="tab_3">
						<p>Lorem Ipsum is simply</p>
					</div><!-- /.tab-pane -->

				</div><!-- /.tab-content -->
			</div><!-- nav-tabs-custom -->

		</div>
	</div>


	<div class="row">
		<div class="col-xs-6">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Inputs</h3>
				</div>
				<div class="box-body">

					<form action="" method="post" role="form" data-parsley-validate>


						<div class="form-group">
							<label>Date range:</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
								<input type="text" class="form-control pull-right date-picker">
							</div>
						</div>

						<div class="form-group">
							<label>Color picker:</label>
							<input type="text" class="form-control color-picker">
						</div><!-- /.form group -->

						<div class="form-group">
							<label>Color picker with addon:</label>
							<div class="input-group color-picker">
								<input type="text" class="form-control">
								<div class="input-group-addon"><i></i></div>
							</div><!-- /.input group -->
						</div><!-- /.form group -->

						<div class="form-group">
							<label>Select</label>
							<select class="form-control select2">
								<option selected="selected">Alabama</option>
								<option>Alaska</option>
								<option>California</option>
								<option>Delaware</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Washington</option>
							</select>
						</div>

						<div class="form-group">
							<label>Multiple</label>
							<select class="form-control select2" multiple="multiple" data-placeholder="Selecione um estado" style="width: 100%;">
							<option>Alabama</option>
							<option>Alaska</option>
							<option>California</option>
							<option>Delaware</option>
							<option>Tennessee</option>
							<option>Texas</option>
							<option>Washington</option>
							</select>
						</div>

					</form>

				</div>
			</div>
		</div>

		<div class="col-xs-6">
			<div class="box">
				<div class="box-body">

					<form action="" method="post" role="form" data-parsley-validate>

						<div class="form-group">
							<label>Date:</label>
							<div class="input-group"><div class="input-group-addon"><i class="fa fa-calendar"></i></div>
							<input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
							</div>
						</div>

						<div class="form-group">
							<label>Telefone:</label>
							<div class="input-group">
								<div class="input-group-addon"><i class="fa fa-phone"></i></div>
								<input type="text" class="form-control" data-inputmask='"mask": "(99) 99999-9999"' data-mask>
							</div>
						</div>

						<div class="form-group">
							<label>
								<input type="checkbox" class="minimal" checked>
							</label>
							<label>
								<input type="checkbox" class="minimal">
							</label>
							<label>
								<input type="checkbox" class="minimal" disabled>
								Minimal skin checkbox
							</label>
						</div>

						<div class="form-group">
							<label>
								<input type="radio" name="r1" class="minimal" checked>
							</label>
							<label>
								<input type="radio" name="r1" class="minimal">
							</label>
							<label>
								<input type="radio" name="r1" class="minimal" disabled>
								Minimal skin radio
							</label>
						</div>

						<div class="form-group">
							<label>Times de futebol</label>
							<input name="tags" class="tags-input" value="Santa Cruz,Sport,Nautico" data-autocomplete-url="" />
						</div>

					</form>

				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-body">
				    <label>Texto</label>
					<form action="">
						<textarea id="editor1" name="editor1" rows="10" cols="80" class="custom-editor"></textarea>
					</form>
				</div>
			</div>
		</div>
	</div>




</section>