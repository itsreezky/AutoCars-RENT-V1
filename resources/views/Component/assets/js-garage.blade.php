

{{-- CREATED WITH ❤︎ Reezky
     http://itsreezky.my.id --}}



{{-- JAVASCRIPT --}}

<script src="{{asset ('assets/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{asset ('assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{asset ('assets/js/material-kit-pro.mincc8a.js?v=3.0.4') }}" type="text/javascript"></script>
<script src="{{asset ('assets/js/plugins/countup.min.js') }}"></script>

{{-- <script src="{{asset ('assets/js/plugins/chartjs.min.js') }}"></script> --}}
{{-- <script src="{{asset ('assets/js/plugins/glide.min.js') }}"></scr> --}}


<script src="{{asset ('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{asset ('assets/js/plugins/typedjs.js') }}"></script>
<script src="{{asset ('assets/js/plugins/choices.min.js') }}"></script>
<script src="{{asset ('assets/js/plugins/flatpickr.min.js') }}"></script>
<script src="{{asset ('assets/js/plugins/parallax.min.js') }}"></script>
<script src="{{asset ('assets/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>
<script src="{{asset ('assets/js/plugins/anime.min.js') }}" type="text/javascript"></script>
<script src="{{asset ('assets/js/config.js') }}"></script>


<script src="https://buttons.github.io/buttons.js" async defer ></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js" type="text/javascript" ></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    if (document.getElementsByClassName('glide')) {
          const glider = new Glide('.gliderrr', {
            autoplay: 10000,
            type: 'carousel',
            perView: 4,
            breakpoints: {
              800: {
                perView: 2
              }
            }
          });
          // The classname for the element that gets transformed
          const tiltableElement = '.glide__container';
          glider.mount();
        };

        if (document.getElementById('choice-button')) {
          var element = document.getElementById('choice-button');
          const example = new Choices(element, {
            searchEnabled: false
          });

        }
        if (document.getElementById('choice-remove-button')) {
          var element = document.getElementById('choice-remove-button');
          const example = new Choices(element, {
            searchEnabled: false
          });
        }

        if (document.getElementById('language-button')) {
          var element = document.getElementById('language-button');
          const example = new Choices(element, {
            searchEnabled: false
          });

        }
        if (document.getElementById('currency-button')) {
          var element = document.getElementById('currency-button');
          const example = new Choices(element, {
            searchEnabled: false
          });
        }
</script>
<script>
        if (document.getElementsByClassName('glidee')) {
              const glider = new Glide('.gliderrrr', {
                autoplay: 7500,
                type: 'carousel',
                perView: 4,
                breakpoints: {
                  800: {
                    perView: 2
                  }
                }
              });
              // The classname for the element that gets transformed
              const tiltableElement = '.glide__containerr';
              glider.mount();
            };

            if (document.getElementById('choice-buttonn')) {
              var element = document.getElementById('choice-buttonn');
              const example = new Choices(element, {
                searchEnabled: false
              });

            }
            if (document.getElementById('choice-remove-buttonn')) {
              var element = document.getElementById('choice-remove-buttonn');
              const example = new Choices(element, {
                searchEnabled: false
              });
            }

            if (document.getElementById('language-buttonn')) {
              var element = document.getElementById('language-buttonn');
              const example = new Choices(element, {
                searchEnabled: false
              });

            }
            if (document.getElementById('currency-buttonn')) {
              var element = document.getElementById('currency-buttonn');
              const example = new Choices(element, {
                searchEnabled: false
              });
            }
</script>
<script>
    // Rounded slider
    const setValue = function(value, active) {
    document.querySelectorAll("round-slider").forEach(function(el) {
        if (el.value === undefined) return;
        el.value = value;
    });
    const span = document.querySelector("#value");
    span.innerHTML = value;
    if (active)
        span.style.color = 'red';
    else
        span.style.color = 'black';
    }

    document.querySelectorAll("round-slider").forEach(function(el) {
    el.addEventListener('value-changed', function(ev) {
        if (ev.detail.value !== undefined)
        setValue(ev.detail.value, false);
        else if (ev.detail.low !== undefined)
        setLow(ev.detail.low, false);
        else if (ev.detail.high !== undefined)
        setHigh(ev.detail.high, false);
    });

    el.addEventListener('value-changing', function(ev) {
        if (ev.detail.value !== undefined)
        setValue(ev.detail.value, true);
        else if (ev.detail.low !== undefined)
        setLow(ev.detail.low, true);
        else if (ev.detail.high !== undefined)
        setHigh(ev.detail.high, true);
    });
    });

    // Count To
    if (document.getElementById('status1')) {
    const countUp = new CountUp('status1', document.getElementById("status1").getAttribute("countTo"));
    if (!countUp.error) {
        countUp.start();
    } else {
        console.error(countUp.error);
    }
    }
    if (document.getElementById('status2')) {
    const countUp = new CountUp('status2', document.getElementById("status2").getAttribute("countTo"));
    if (!countUp.error) {
        countUp.start();
    } else {
        console.error(countUp.error);
    }
    }
    if (document.getElementById('status3')) {
    const countUp = new CountUp('status3', document.getElementById("status3").getAttribute("countTo"));
    if (!countUp.error) {
        countUp.start();
    } else {
        console.error(countUp.error);
    }
    }
    if (document.getElementById('status4')) {
    const countUp = new CountUp('status4', document.getElementById("status4").getAttribute("countTo"));
    if (!countUp.error) {
        countUp.start();
    } else {
        console.error(countUp.error);
    }
    }
    if (document.getElementById('status5')) {
    const countUp = new CountUp('status5', document.getElementById("status5").getAttribute("countTo"));
    if (!countUp.error) {
        countUp.start();
    } else {
        console.error(countUp.error);
    }
    }
    if (document.getElementById('status6')) {
    const countUp = new CountUp('status6', document.getElementById("status6").getAttribute("countTo"));
    if (!countUp.error) {
        countUp.start();
    } else {
        console.error(countUp.error);
    }
    }
</script>
<script>
        if (document.getElementById('choices-button')) {
            var element = document.getElementById('choices-button');
            const example = new Choices(element, {
                searchEnabled: false
            });

        }
        if (document.getElementById('choices-remove-button')) {
            var element = document.getElementById('choices-remove-button');
            const example = new Choices(element, {
                searchEnabled: false
            });
        }

</script>
<script type="text/javascript">
    window.onload = function() { jam(); }

    function jam() {
            var e = document.getElementById('jam'),
            d = new Date(), h, m, s;
            h = d.getHours();
            m = set(d.getMinutes());
            s = set(d.getSeconds());

            e.innerHTML = h +':'+ m ;

            setTimeout('jam()', 1000);
        }

        function set(e) {
            e = e < 10 ? '0'+ e : e;
            return e;
        }

    var tw = new Date();

    if (tw.getTimezoneOffset() == 0) (a=tw.getTime() + ( 7 *60*60*1000))

    else (a=tw.getTime());

    tw.setTime(a);

    var tahun= tw.getFullYear ();

    var hari= tw.getDay ();

    var bulan= tw.getMonth ();

    var tanggal= tw.getDate ();

    var hariarray=new Array("Minggu,","Senin,","Selasa,","Rabu,","Kamis,","Jum'at,","Sabtu,");

    var bulanarray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","Nopember","Desember");

    document.getElementById("tanggal").innerHTML = hariarray[hari]+" "+tanggal+" "+bulanarray[bulan]+" "+tahun;

</script>

{{-- JAVASCRIPT --}}
