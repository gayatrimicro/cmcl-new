jQuery(document).ready(function($) {
  $inputs = $('[data-category-filters] input');

  var update = function() {
    var pathname = window.location.pathname;

    var ids = $inputs.filter(':checked').map(function() {
      return this.value;
    });

    $('body').addClass('category-filters-loading');

    if(/\/page\//.test(pathname)) {
      window.location.href = window.location.origin + pathname.replace(/\/page\/[0-9]*/, '') + '?pcat=' + Array.prototype.join.call(ids, ',');
      return;
    }

    // Rebuild shop listing via ajax
    $.ajax({
      url: pathname,
      method: 'GET',
      data: {
        'pcat': Array.prototype.join.call(ids, ',')
      }
    }).done(function(data) {
      repaintShop($(data).find('#content'));

      var newLocation = pathname;

      if(ids.length) {
        newLocation += '?pcat=' + Array.prototype.join.call(ids, ',')
      }

      if(history.pushState) {
        history.pushState(
          null,
          null,
          newLocation
        );
      }
    }).fail(function() {
      repaintShop('<p class="woocommerce-info">No products were found matching your selection.</p>');
    }).always(function() {
      $('body').removeClass('category-filters-loading');
    })
  };

  var repaintShop = function(html) {
    $('#content').html(html);
    $(document).foundation('equalizer', 'reflow');
  };

  $inputs.on('change', update);
});