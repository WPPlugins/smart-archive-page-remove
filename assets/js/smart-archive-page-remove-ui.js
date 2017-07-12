jQuery( document ).ready( function( $ ) {
  $( '#pp-smart-archive-page-remove-admin-notice-1' ).on( 'click', '.notice-dismiss', function ( event ) {
    event.preventDefault();
		data = {
			action: 'pp_smart_archive_page_remove_dismiss_admin_notice',
			pp_smart_archive_page_remove_dismiss_admin_notice: pp_smart_archive_page_remove.pp_smart_archive_page_remove_dismiss_admin_notice_number
		};
		$.post( ajaxurl, data );
		return false;
	});
});