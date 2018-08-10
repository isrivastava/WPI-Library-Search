(function($) {

  Drupal.behaviors.librarySearch = {
    attach: function(context, settings) {
      var searchOptions = $('#search-options');   
      var form = $('#primo-library-search');
      var tab = $('#tab_value');
      var scope = $('#scope_value');

      searchOptions.on('change', function() {
        searchCatalogs(form);
      });

      form.submit(function(e){

      var mode = $('#mode');
      var query = $('#primoQueryTemp');
      var vid = $('#vid');
      var displayMode = $('#displayMode');
      var bulkSize = $('#bulkSize');
      var highlight = $('#highlight');
      var dum = $('#dum');
      var displayField = $('#displayField');

      	var action = 'https://wpi.primo.exlibrisgroup.com/discovery/search';                                                                                                                      
        action += '?query=any,contains,' + $('#primoQueryTemp').val();
        action += '&' + vid.attr('name') + '=' + vid.val();
        action += '&' + $('#tab_value').attr('name') + '=' + $('#tab_value').val();
        action += '&' + $('#scope_value').attr('name') + '=' + $('#scope_value').val();
        action += '&' + mode.attr('name') + '=' + mode.val();
        action += '&' + displayMode.attr('name') + '=' + displayMode.val();
        action += '&' + bulkSize.attr('name') + '=' + bulkSize.val();
        action += '&' + highlight.attr('name') + '=' + highlight.val();
        action += '&' + dum.attr('name') + '=' + dum.val();
        action += '&' + displayField.attr('name') + '=' + displayField.val();
        action += '&sortby=rank';

        openInNewTab(action);
        e.preventDefault();
      });

      function searchCatalogs(form) {
        var optionValue = searchOptions.val();
        tab.attr("value", optionValue);

        // We want to check the value of the selected option and change the value accordingly
        switch (optionValue) {
          case 'Everything':
            scope.attr("value","MyInst_and_CI");
            break;
          case 'LibraryCatalog':
            scope.attr("value","MyInstitution");
            break;
          case 'CentralIndex':
          //case 'studentWorks':
          case 'CourseReserves':
            scope.attr("value", optionValue);
            break;
        }
      }

      function openInNewTab(url) {
        var win = window.open(url, '_blank');
        win.focus();
      }
    }
  }

}(jQuery));
