jQuery(document).ready(function() {
    $('.datatable').DataTable({
        responsive: true,
        lengthMenu: [5, 10, 25, 50, 100, 200, 400, 500],
        pageLength: 10,
        // Order settings
        order: [[1, 'desc']],
    })
});
