$(function () {

  $(window).resize(function () {
    setupAffix();
  });

  function setupAffix() {
    $('#sidebar').affix({
      offset: {
        top: function () {
          return (this.top = $('#jumbotron').outerHeight(true))
        }, bottom: function () {
          return (this.bottom = $('.bs-footer').outerHeight(true))
        }
      }
    })
  }

  $('#sidebar').on('activate.bs.scrollspy', function () {
    console.log('my balls')
  })

  setupAffix();
});
