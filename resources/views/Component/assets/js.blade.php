<script src="{{asset ('assets/js/config.js') }}"></script>

<script src="{{asset ('vendors/simplebar/simplebar.min.js') }}"></script>
<script src="{{asset ('vendors/popper/popper.min.js') }}"></script>
<script src="{{asset ('vendors/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{asset ('vendors/anchorjs/anchor.min.js') }}"></script>
<script src="{{asset ('vendors/is/is.min.js') }}"></script>
<script src="{{asset ('vendors/fontawesome/all.min.js') }}"></script>
<script src="{{asset ('vendors/lodash/lodash.min.js') }}"></script>
<script src="{{asset ('vendors/list.js/list.min.js') }}"></script>
<script src="{{asset ('vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{asset ('vendors/dayjs/dayjs.min.js') }}"></script>

<script src="{{asset ('assets/js/phoenix.js') }}"></script>


<script>
    var phoenixIsRTL = window.config.config.phoenixIsRTL;
    if (phoenixIsRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
    } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
    }

</script>
