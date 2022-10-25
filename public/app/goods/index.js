$(function () {
    initDatatable()

})

function initDatatable() {
    const dtGoods = renderDatatable(
        '#dtGoods',
        '/api/datatables/goods',
        [
            {
                data: 'id', name: 'id', class: 'table-fit text-right', orderable: false, searchable: false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1
                }
            },
            {
                data: 'name', name: 'name', orderable: true, searchable: true
            },
            {
                data: 'condition', name: 'condition', orderable: true, searchable: true,
                render: function(data, type, row){
                    condition = '';
                    if(data == 1){
                        condition = 'Layak'; 
                    }else if(data == 2){
                        condition = 'Tidak Layak';
                    }else{
                        condition = 'Hilang';
                    }

                    return goods;
                }
            },
            {
                data: 'status', name: 'status', orderable: true, searchable: true,
                render: function(data, type, row){
                    statusBadge = '<span class="badge badge-success">Bisa dipinjam</span>';
                    if(data != 1){
                        statusBadge = '<span class="badge badge-danger">Tidak bisa dipinjam</span>'; 
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

    setDatatableLengthField(dtGoods, $('#dtGoods').parents('.dt-container').find('.dt-length'))
    setDatatableFilterField(dtGoods, $('#dtGoods').parents('.dt-container').find('.dt-search'))
    setDatatablePrintButton(dtGoods, $('#dtGoods').parents('.dt-container').find('.dt-print'))
    setDatatableExcelButton(dtGoods, $('#dtGoods').parents('.dt-container').find('.dt-excel'))
    setDatatablePdfButton(dtGoods, $('#dtGoods').parents('.dt-container').find('.dt-pdf'))

}