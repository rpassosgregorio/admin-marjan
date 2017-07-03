(function ($) {
	'use strict';


	//   __               _ _                _
	//  / _| ___  ___  __| | |__   __ _  ___| | __
	// | |_ / _ \/ _ \/ _` | '_ \ / _` |/ __| |/ /
	// |  _|  __/  __/ (_| | |_) | (_| | (__|   <
	// |_|  \___|\___|\__,_|_.__/ \__,_|\___|_|\_\

	function feedback(action, message) {

		var temp = _.template($('#feedback-template').html());
		var html = temp({ action: action, message: message });

		$('body').append(html);

		removeAllFeedback(10000);
	}

	function removeAllFeedback(duration) {
		setTimeout(function() {
			$('.feedback').remove();
		}, duration);
	}

	removeAllFeedback(4000);



	//  _                    _      ____  _        _
	// | |_ ___   __ _  __ _| | ___/ ___|| |_ __ _| |_ _   _ ___
	// | __/ _ \ / _` |/ _` | |/ _ \___ \| __/ _` | __| | | / __|
	// | || (_) | (_| | (_| | |  __/___) | || (_| | |_| |_| \__ \
	//  \__\___/ \__, |\__, |_|\___|____/ \__\__,_|\__|\__,_|___/
	//           |___/ |___/

	$('.btn-status').on('click', toggleStatus);

	function ajaxToggleStatus(data, callback) {
		$.ajax({
			url: baseUrl + baseUrlCtrl + '/update_status',
			type: 'POST',
			data: data,
			success: callback
		});
	}

	function toggleStatus(e) {

		var $el = $(e.currentTarget);
		var $tr = $el.closest('tr');
		var curStatus = $tr.attr('data-status');
		var id = $tr.attr('data-id');

		ajaxToggleStatus({ id: id, active: curStatus }, function(response) {

			$tr.attr('data-status', response);
			$el.removeClass('btn-danger btn-success');

			if(response == '1') {
				$el.addClass('btn-success').text('Sim');
			} else {
				$el.addClass('btn-danger').text('Não');
			}

		});

	}

	$('.btn-status-project').on('click', toggleStatus);

	function ajaxToggleStatus(data, callback) {
		$.ajax({
			url: baseUrl + baseUrlCtrl + '/update_status',
			type: 'POST',
			data: data,
			success: callback
		});
	}

	function toggleStatus(e) {

		var $el = $(e.currentTarget);
		var $tr = $el.closest('tr');
		var curStatus = $tr.attr('data-status');
		var id = $tr.attr('data-id');

		ajaxToggleStatus({ id: id, active: curStatus }, function(response) {

			$tr.attr('data-status', response);
			$el.removeClass('btn-danger btn-success');

			if(response == '1') {
				$el.addClass('btn-success').text('Sim');
			} else {
				$el.addClass('btn-danger').text('Não');
			}

		});

	}



	//      _      _      _       _     _     _   ___ _
	//   __| | ___| | ___| |_ ___| |   (_)___| |_|_ _| |_ ___ _ __ ___
	//  / _` |/ _ \ |/ _ \ __/ _ \ |   | / __| __|| || __/ _ \ '_ ` _ \
	// | (_| |  __/ |  __/ ||  __/ |___| \__ \ |_ | || ||  __/ | | | | |
	//  \__,_|\___|_|\___|\__\___|_____|_|___/\__|___|\__\___|_| |_| |_|

	$('.btn-delete-list-item').on('click', deleteListItem);

	function getListItemCheckedIds() {
		var ids = [];
		$('.table tbody tr').each(function(){
			var $tr = $(this);
			if($tr.find('input[type=checkbox]').is(':checked') == true){
				ids.push( $tr.attr('data-id') );
			}
		});
		return ids;
	}

	function removeListItems(ids) {
		var $table = $('.table tbody');
		_.each(ids, function(id) {
			$table.find('tr[data-id="'+ id +'"]').remove();
		});
	}

	function ajaxDeleteListItem(data, callback) {
		$.ajax({
			url: baseUrl + baseUrlCtrl + '/delete',
			type: 'POST',
			dataType: 'json',
			data: data,
			success: callback
		});
	}

	function deleteListItem(e) {

		var ids = getListItemCheckedIds();

		ajaxDeleteListItem({ ids: ids }, function(response) {
			if(response.result == 'true') {
				feedback('success', response.msg);
				removeListItems(ids);
			} else {
				feedback('danger', response.msg);
			}
		});

	}




	//  _                 _ ___ _
	// | | ___   __ _  __| |_ _| |_ ___ _ __ ___  ___
	// | |/ _ \ / _` |/ _` || || __/ _ \ '_ ` _ \/ __|
	// | | (_) | (_| | (_| || || ||  __/ | | | | \__ \
	// |_|\___/ \__,_|\__,_|___|\__\___|_| |_| |_|___/

	$('.btn-load-items').on('click', btnLoadItems);

	function ajaxGetItemsPerPage(url, callback) {
		$.ajax({
			url: url,
			type: 'POST',
			success: callback
		});
	}

	function updateItemsPerPage() {
		$('.total-items-page').text($('.table tbody tr').length);
	}

	function btnLoadItems(e) {

		var $el = $(e.currentTarget);
		var page = +$el.attr('data-page');
		var totalPages = +$el.attr('data-total-pages');
		var url = baseUrl + baseUrlCtrl + '/index/';

		if($el.hasClass('disabled')) return;

		$el.addClass('disabled');

		page++;

		if(location.href.search('/index/') >= 0) {
			url  = location.href.split('/');

			if(url.indexOf('index') >= 0) {
				url[url.indexOf('index') + 1] = page;
			}

			url = url.join('/');

		} else {
			url += page;
		}



		if(strSearch != '') {
			url += '/' + strSearch.replace(/ /gi,'+');
		}

		ajaxGetItemsPerPage(url, function(response) {
			var $box = $(response);
			var $table = $('.table');

			$table.find('tbody').append($box.find('tbody').html());

			if(page >= totalPages) {
				$el.remove();
			} else {
				$el.attr('data-page', page).removeClass('disabled');
			}

			$table.find('tbody a').each(function() {
				var $a = $(this);
				var href = $a.attr('href');

				href = href.replace('edit/' + (page - 1) + '/', 'edit/' + page + '/');
				$a.attr('href', href);
			});

			$('.btn-status').off('click').on('click', toggleStatus);

			shiftSelectable();
			updateItemsPerPage();
		});

	}

	updateItemsPerPage();



	//                 _       _      _____     _        _ ___ _
	// _   _ _ __   __| | __ _| |_ __|_   _|__ | |_ __ _| |_ _| |_ ___ _ __ ___  ___
	//| | | | '_ \ / _` |/ _` | __/ _ \| |/ _ \| __/ _` | || || __/ _ \ '_ ` _ \/ __|
	//| |_| | |_) | (_| | (_| | ||  __/| | (_) | || (_| | || || ||  __/ | | | | \__ \
	// \__,_| .__/ \__,_|\__,_|\__\___||_|\___/ \__\__,_|_|___|\__\___|_| |_| |_|___/
	//      |_|
	//
	// Update total items per page

	$('select[name="updateTotalItemsPage"]').on('change', updateTotalItems);

	function updateTotalItems(e) {
		var total = $(e.currentTarget).val();
		location.href = baseUrl + baseUrlCtrl + '/total_itens_per_page/' + total;
	}




	//  _        _     _      ____             _
	// | |_ __ _| |__ | | ___/ ___|  ___  _ __| |_
	// | __/ _` | '_ \| |/ _ \___ \ / _ \| '__| __|
	// | || (_| | |_) | |  __/___) | (_) | |  | |_
	//  \__\__,_|_.__/|_|\___|____/ \___/|_|   \__|

	$('.table th').on('click', btnTableSort);

	function btnTableSort(e) {

		var $el = $(e.currentTarget);
		var asc = $el.attr('data-order-asc');
		var desc = $el.attr('data-order-desc');
		var urlTo;

		if(!asc && !desc) return;

		if($el.hasClass('sorting') || $el.hasClass('sorting_asc')) {
			urlTo = desc;
		} else if($el.hasClass('sorting_desc')) {
			urlTo = asc;
		}

		location.href = urlTo;
	}

	(function checkTableSort() {

		var $table = $('.table');
		var tableOrderField = $table.attr('data-order-field');
		var tableOrderSort = $table.attr('data-order-sort');

		$table.find('th').each(function() {

			var $el = $(this);
			var asc = $el.attr('data-order-asc');
			var desc = $el.attr('data-order-desc');
			var field = $el.attr('data-field');

			if(!asc && !desc) return;

			if(field == tableOrderField) {
				if(tableOrderSort == 'asc') {
					$el.addClass('sorting_asc');
				} else {
					$el.addClass('sorting_desc');
				}
			} else {
				$el.addClass('sorting');
			}

		})
	})();



	//                          _     _____
	//  ___  ___  __ _ _ __ ___| |__ |  ___|__  _ __ _ __ ___
	// / __|/ _ \/ _` | '__/ __| '_ \| |_ / _ \| '__| '_ ` _ \
	// \__ \  __/ (_| | | | (__| | | |  _| (_) | |  | | | | | |
	// |___/\___|\__,_|_|  \___|_| |_|_|  \___/|_|  |_| |_| |_|

	$('.search-form').on('submit', function(e) {
		var text = $(this).find('.form-control').val();
		var url = baseUrl + baseUrlCtrl;

		if(text != '') {
			text = text.replace(/ /gi,'+');
			url += '/index/1/' + text;
		}

		location.href = url;

		return false;
	});



	//  _             _       _____
	// | | ___   __ _(_)_ __ |  ___|__  _ __ _ __ ___
	// | |/ _ \ / _` | | '_ \| |_ / _ \| '__| '_ ` _ \
	// | | (_) | (_| | | | | |  _| (_) | |  | | | | | |
	// |_|\___/ \__, |_|_| |_|_|  \___/|_|  |_| |_| |_|
	//          |___/

	$('.login-form').on('submit', loginFormSubmit);
	$('.login-form-pass__btn').on('click', loginFormPassBtn);

	function ajaxLoginFormPass(data, callback) {
		$.ajax({
			url: baseUrl + '/home/newPassword',
			type: 'POST',
			data: data,
			dataType: 'json',
			success: callback
		});
	}

	function loginFormSubmit() {
		if($(this).hasClass('login-form--pass')) {
			ajaxLoginFormPass({
				email: $(this).find('input[type=email]').val()
			}, function(response) {
				if(response.success == 'false') {
					feedback('danger', response.msg);
				} else {
					feedback('success', response.msg);
				}
			});
			return false;
		}
	}

	function loginFormPassBtn(e) {
		e.preventDefault();
		$(this).toggleClass('active');
		$('.login-form').toggleClass('login-form--pass');
	}




	//       _
	//   ___| | ___  _ __   ___
	//  / __| |/ _ \| '_ \ / _ \
	// | (__| | (_) | | | |  __/
	//  \___|_|\___/|_| |_|\___|

	$('.btn-clone-add').on('click', btnClone);
	$('.btn-clone-remove').on('click', btnClone);
	$('.btn-delete-clone-item').on('click', btnDeleteItem);

	function btnClone(e) {

		var $el = $(e.currentTarget);
		var $container = $el.closest('.clone-container');
		var $item = $container.find('.clone-item:first').clone();
		var $items = $container.find('.clone-item');

		if($el.hasClass('btn-clone-add')) {

			$item.find('div.cke').remove();

			$container.append($item);

			$container.find('.clone-item:last .custom-editor').each(function() {
				var id = $(this).attr('id');
				id += '_' + Math.round(Math.random() * 999);
				$(this).attr('id', id);
				CKEDITOR.replace(id);
			});

			$container.find('.clone-item:last .btn-delete-clone-item').removeClass('hide');
			$container.find('.clone-item:last .btn-delete-clone-item').on('click', btnDeleteItem);

			$container.find('.clone-item:last input').each(function() {
				if($(this).is(':text')) {
					$(this).val('');
				} else if($(this).is(':checkbox')) {
					$(this).prop('checked', false);
				}
			})

		} else {

			if($items.length > 1) {
				$items.filter(':last').remove();
			}

		}

	}


	function btnDeleteItem(e) {
		$(this).closest('.clone-item').remove();
	}




	//             _   _                   _             _
	//   __ _  ___| |_(_)_   _____   _ __ | |_   _  __ _(_)_ __  ___
	//  / _` |/ __| __| \ \ / / _ \ | '_ \| | | | |/ _` | | '_ \/ __|
	// | (_| | (__| |_| |\ V /  __/ | |_) | | |_| | (_| | | | | \__ \
	//  \__,_|\___|\__|_| \_/ \___| | .__/|_|\__,_|\__, |_|_| |_|___/
	//                              |_|            |___/

	function getListIDs() {
		var ids = [];
		$('.table tbody tr').each(function(){
			var $tr = $(this);
			ids.push( $tr.attr('data-id') );
		});
		return ids;
	}

	function shiftSelectable() {
		$('.table input[type="checkbox"]').shiftSelectable();
	}

	function tableDrag() {
		var $table = $('.table');

		if(!$table.length) return false;

		var tableTop = $table.eq(0).offset().top - 38;

		var fixHelper = function(e, ui) {
			ui.children().each(function() {
				$(this).width($(this).width());
			});
			return ui;
		};

		function dragChange() {
			$.ajax({
				url: baseUrl + baseUrlCtrl + '/sort_items_grid/',
				type: 'POST',
				data: { id: getListIDs },
				success: function(response){
					console.log(response);
				}
			});
		}

		function dragSort(e, ui) {
			ui.helper.css('top', e.pageY - tableTop);
		}

		$('.table').each(function() {

			if($(this).hasClass('no-drag')) return true;

			$(this).find('tbody').sortable({
				helper: fixHelper,
				stop: dragChange,
				sort: dragSort
			}).disableSelection();

		});

	}

	function checkAll() {
		$('.check-all').on('click', function(e){
			if($(this).is(':checked') == true){
				$(this).closest('table').find('tbody').find('input[type=checkbox]').prop('checked', true);
			} else {
				$(this).closest('table').find('tbody').find('input[type=checkbox]').prop('checked', false);
			}
		});
	}



	//              _ _
	//   __ _  __ _| | | ___ _ __ _   _
	//  / _` |/ _` | | |/ _ \ '__| | | |
	// | (_| | (_| | | |  __/ |  | |_| |
	//  \__, |\__,_|_|_|\___|_|   \__, |
	//  |___/                     |___/


	function gallerySortChange(e, ui) {
		var ids = [];

		ui.item.closest('.gallery').find('li').each(function(){
			ids.push($(this).attr('data-id'));
		});

		$.ajax({
			url: baseUrl + baseUrlCtrl + '/sort_gallery',
			type: 'post',
			dataType: 'json',
			data: {ids: ids},
			success: function(response) {
				console.log(response);
			}
		})
	}

	function galleryRemoveItem(e) {

		e.preventDefault();

		var $el = $(e.currentTarget);
		var $item = $el.closest('.gallery-item');
		var id = $item.attr('data-id');
		var removeConfirm = confirm('Você tem certeza que deseja excluir esse arquivo?');

		if(removeConfirm) {

			$item.remove();

			$.ajax({
				url: baseUrl + baseUrlCtrl + '/delete_item',
				type: 'post',
				data: {id: id},
				dataType: 'json',
				success: function(response) {
					console.log(response);
				}
			});

		}

		return false;
	}

	function gallerySort(e, ui) {
		ui.helper.css('top', e.pageY - ui.helper.closest('.gallery').offset().top);
	}

	function galleryInit() {

		$('.gallery-container').each(function(){

			var $el = $(this);
			var url = $el.attr('data-url-upload');
			var inputHiddenName = $el.attr('data-input-hidden-name');
			var isMultiple = $el.find('.file-upload').attr('multiple') ? true : false;

			$el.find('.file-upload').fileupload({
				url: url,
				dataType: 'json',
				done: function (e, data) {

					$el.find('.progress-bar').css('width', '0%');

					var result = data.result;

					if(result.result == 'true') {

						var img = result.fileIsImg == 'false' ? '<div class="gallery-item-info"><i class="fa fa-book"></i> '+ result.idFile +'</div>' : '<img src="'+ result.pathFile +'" alt="">';
						var html = '<li class="gallery-item" data-id="'+ result.idFile +'"> \
									'+ img +' \
									<a href="#" class="btn btn-danger btn-sm btn-gallery-remove-item">Excluir</a> \
									<input type="hidden" name="'+ inputHiddenName +'[]" value="'+ result.idFile +'"> \
								</li>';

						if(isMultiple) {
							$el.find('.gallery ul').prepend(html);
						} else {
							$el.find('.gallery ul').html(html);
						}

					} else {
						feedback('danger', result.msg);
					}

				},

				progressall: function (e, data) {
					var progress = parseInt(data.loaded / data.total * 100, 10);
					$el.find('.progress-bar').css('width', progress + '%');
				}

			});

			if(!$el.find('.gallery').length) {
				$el.append('<div class="gallery clearfix"><ul></ul></div>');
			}

			$el.find('.gallery ul').sortable({
				stop: gallerySortChange,
				sort: gallerySort,
				cursor: 'move'
			}).disableSelection();

			$el.find('.btn-gallery-remove-item').on('click', galleryRemoveItem);

		});

	}


	//      _                                               _
	//  ___| |_   _  __ _    __ _  ___ _ __   ___ _ __ __ _| |_ ___  _ __
	// / __| | | | |/ _` |  / _` |/ _ \ '_ \ / _ \ '__/ _` | __/ _ \| '__|
	// \__ \ | |_| | (_| | | (_| |  __/ | | |  __/ | | (_| | || (_) | |
	// |___/_|\__,_|\__, |  \__, |\___|_| |_|\___|_|  \__,_|\__\___/|_|
	//              |___/   |___/


	$('input[data-id-slug-generator]').each(function() {

		var $el = $(this);
		var $elTarget = $('#' + $el.attr('data-id-slug-generator'));

		$el.on('change keyup', function(e) {
			var slug = url_slug($el.val());

			$elTarget.val(slug).trigger('change');
		});

		$elTarget.on('change keyup', function(e) {
			var text = url_slug($(e.currentTarget).val());
			$(e.currentTarget).val(text);
		});
	});



	//             _ _     _   _                   _
	// __   ____ _| (_) __| | (_)_ __  _ __  _   _| |_
	// \ \ / / _` | | |/ _` | | | '_ \| '_ \| | | | __|
	//  \ V / (_| | | | (_| | | | | | | |_) | |_| | |_
	//   \_/ \__,_|_|_|\__,_| |_|_| |_| .__/ \__,_|\__|
	//                                |_|


	var xhrValidInputBackend;

	$('input[data-valid-input-backend]').each(function() {

		var $el = $(this);
		var $label = $el.prev();
		var $formGroup = $el.closest('.form-group');
		var url = $el.attr('data-valid-input-backend');

		$label.attr('data-html', $label.html());

		$el.on('change keyup', function(e) {

			if(xhrValidInputBackend) xhrValidInputBackend.abort();

			xhrValidInputBackend = $.ajax({
				url: url,
				type: 'POST',
				dataType: 'json',
				data: { input: $el.val() },
				success: function(response) {
					$formGroup.removeClass('has-success has-error');
					if(response.result == 'false') {
						$formGroup.addClass('has-error');
						$label.html('<i class="fa fa-times-circle-o"></i> ' + $label.attr('data-html'));
					} else {
						$formGroup.addClass('has-success');
						$label.html('<i class="fa fa-check"></i> ' + $label.attr('data-html'));
					}
				}
			})

		});
	});




	function form() {
		$('.select2').select2();
		$('[data-mask]').inputmask();
		$('.date-picker').datepicker();
		$('.color-picker').colorpicker();

		$('.tags-input').each(function() {
			var $el = $(this);
			if($el.attr('data-autocomplete-url')) {
				$el.tagsInput({
					autocomplete_url: $el.attr('data-autocomplete-url'),
					autocomplete: {
						selectFirst: true,
						autoFill: true
					},
					defaultText: 'Adicione'
				});
			} else {
				$el.tagsInput();
			}
		})


		$('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
			checkboxClass: 'icheckbox_minimal-blue',
			radioClass: 'iradio_minimal-blue'
		});

		CKEDITOR.config.toolbar = [
			['Styles','Format','Font','FontSize'],
			['Bold','Italic','Underline','StrikeThrough','-','Undo','Redo','-','Cut','Copy','Paste','Find','Replace','-','Outdent','Indent','-','Print'],
			['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
			['Image','Table','-','Link','Flash','Smiley','TextColor','BGColor','Source']
		];

		$('.custom-editor').each(function() {
			CKEDITOR.replace($(this).attr('id'));
		});

	}


	function extrasModal() {
		var $btnDeleteImgModal = $('.btn-delete-img-modal');

		$btnDeleteImgModal.on('click', function(e) {
			e.preventDefault();

			var $btn = $(this);
			var url = $btn.attr('data-url');

			$btn.parent().remove();

			$.ajax({
				url: url,
				type: 'post',
				dataType: 'json'
			});

		});

	}


	function initialize() {
		shiftSelectable();
		tableDrag();
		checkAll();
		form();
		galleryInit();
		extrasModal();
	}

	initialize();

})(jQuery);