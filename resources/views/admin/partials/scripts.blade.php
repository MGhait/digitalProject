<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{{ asset('admin-assets') }}//vendor/libs/jquery/jquery.js"></script>
<script src="{{ asset('admin-assets') }}//vendor/libs/popper/popper.js"></script>
<script src="{{ asset('admin-assets') }}//vendor/js/bootstrap.js"></script>
<script src="{{ asset('admin-assets') }}//vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="{{ asset('admin-assets') }}//vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{{ asset('admin-assets') }}//vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="{{ asset('admin-assets') }}//js/main.js"></script>

<!-- Page JS -->
<script src="{{ asset('admin-assets') }}//js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
@livewireScripts
<script>
    document.addEventListener("DOMContentLoaded", () => {
        Livewire.hook('morph.updated', ({ el, component }) => {
            const SuccessAlert = document.querySelector('.success-alert');
            if (SuccessAlert) {
                console.log("SuccessAlert found");
                setTimeout(() => {
                    SuccessAlert.style.display = 'none';
                }, 2000);
            } else {
                console.log("SuccessAlert not found");
            }

        })
    });
    // document.addEventListener('livewire:init', function () {
    //     Livewire.hook('afterDomUpdate', () => {
    //         const SuccessAlert = document.querySelector('.success-alert');
    //
    //         if (SuccessAlert) {
    //             console.log("SuccessAlert found");
    //             setTimeout(() => {
    //                 SuccessAlert.style.display = 'none';
    //             }, 2000);
    //         } else {
    //             console.log("SuccessAlert not found");
    //         }
    //     });
    // });
    // document.addEventListener('DOMContentLoaded', () => {
    //     window.addEventListener('CreateModalToggle', event => {
    //         $('#createModal').modal('toggle');
    //     });
    // });

    window.addEventListener('create-modal-toggle', event => {
        $('#createModal').modal('toggle');
    })

    window.addEventListener('edit-modal-toggle', event => {
        $('#editModal').modal('toggle');
    })

    window.addEventListener('delete-modal-toggle', event => {
        $('#deleteModal').modal('toggle');
    })
    window.addEventListener('show-modal-toggle', event => {
        $('#showModal').modal('toggle');
    })
</script>
