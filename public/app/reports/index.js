$(function () {
    initDatatable()

})

function initDatatable() {
    const dtReportsBorrow = renderDatatable(
        '#dtReports',
        '/api/datatables/reports/loans',
        [
            {
                data: 'id', name: 'id', class: 'table-fit text-right', orderable: false, searchable: false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1
                }
            },
            {
                data: 'officer_name', name: 'officer_name', orderable: true, searchable: true
            },
            {
                data: 'category_name', name: 'category_name', orderable: true, searchable: true
            },
            {
                data: 'goods_name', name: 'goods_name', orderable: true, searchable: true
            },
            {
                data: 'loans_date', name: 'loans_date', orderable: true, searchable: true
            },
            {
                data: 'loans_return', name: 'loans_return', orderable: true, searchable: true
            },
            {
                data: 'status', name: 'status', orderable: true, searchable: true,
                render: function(data, type, row){
                    statusBadge = '<span class="badge badge-warning">Sedang dipinjam</span>';
                    if(data != 1){
                        statusBadge = '<span class="badge badge-success">Sudah Dikembalikan</span>'; 
                    }

                    return statusBadge;
                }
            },
        ],
        function (data, type, row) {
            const path = 'categories/' + row.id
            let updateBtn = '',
            detailBtn = '',
            deleteBtn = ''

                    detailBtn = '<a href="'+ path +'" class="btn btn-sm btn-outline-info" data-toggle="tooltip" data-placement="top" title="Detail"><i class="fas fa-fw fa-eye"></i></a>'
                    updateBtn = '<a href="'+ path +'/edit" class="btn btn-sm btn-outline-warning" data-toggle="tooltip" data-placement="top" title="Ubah"><i class="fas fa-fw fa-edit"></i></a>'
                    deleteBtn = '<a href="'+ path +'/delete" class="btn btn-sm btn-outline-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fas fa-fw fa-trash"></i></a>'

            content = detailBtn +' '+ updateBtn + ' '+ deleteBtn

            return content
        },
        
        [[ 1, 'asc' ]],
        function(d) {
        return d
        },
        function(settings) {
            $('[data-toggle="tooltip"]').tooltip();
        },
    )

    setDatatableLengthField(dtLoans, $('#dtReports').parents('.dt-container').find('.dt-length'))
    setDatatableFilterField(dtLoans, $('#dtReports').parents('.dt-container').find('.dt-search'))
    setDatatablePrintButton(dtLoans, $('#dtReports').parents('.dt-container').find('.dt-print'))
    setDatatableExcelButton(dtLoans, $('#dtReports').parents('.dt-container').find('.dt-excel'))
    setDatatablePdfButton(dtLoans, $('#dtReports').parents('.dt-container').find('.dt-pdf'))

}