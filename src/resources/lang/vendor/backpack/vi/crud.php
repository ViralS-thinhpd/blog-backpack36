<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new' => 'Tạo mới',
    'save_action_save_and_edit' => 'Lưu',
    'save_action_save_and_back' => 'Lưu và quay lại',
    'save_action_changed_notification' => 'Hành vi mặc định sau khi lưu và đã được thay đổi',

    // Create form
    'add'                 => 'Thêm',
    'back_to_all'         => 'Quay lại',
    'cancel'              => 'Huỷ',
    'add_a_new'           => 'Thêm mới',

    // Edit form
    'edit'                 => 'Sửa',
    'save'                 => 'Lưu',

    // Revisions
    'revisions'            => 'Xem lại',
    'no_revisions'         => 'Không tìm thấy bản ghi',
    'created_this'         => 'tạo cái này',
    'changed_the'          => 'đã thay đổi',
    'restore_this_value'   => 'Lưu giá trị này',
    'from'                 => 'từ',
    'to'                   => 'đến',
    'undo'                 => 'Quay lại',
    'revision_restored'    => 'Sửa đổi thành công',
    'guest_user'           => 'Tài khoản khách',

    // Translatable models
    'edit_translations' => 'THAY ĐỔI DỊCH',
    'language'          => 'Ngôn ngữ',

    // CRUD table view
    'all'                       => 'Tất cả ',
    'in_the_database'           => 'trong cơ sở dữ liệu',
    'list'                      => 'Danh sách',
    'actions'                   => 'Hành động',
    'preview'                   => 'Chi tiết',
    'details'                   => 'Chi tiết',
    'delete'                    => 'Xoá',
    'admin'                     => 'Quản lý',
    'details_row'               => 'Đây là chi tiết hàng. Sửa đổi tại đây.',
    'details_row_loading_error' => 'Có lỗi khi tải chi tiết. Vui lòng thử lại.',

        // Confirmation messages and bubbles
        'delete_confirm'                              => 'Bạn có muốn xoá mục này?',
        'delete_confirmation_title'                   => 'Mục đã được xoá',
        'delete_confirmation_message'                 => 'Mục đã được xoá thành công.',
        'delete_confirmation_not_title'               => 'Không xoá được',
        'delete_confirmation_not_message'             => "Quá trình xảy ra lỗi. Mục của bạn có thể không bị xoá.",
        'delete_confirmation_not_deleted_title'       => 'Không xoá được',
        'delete_confirmation_not_deleted_message'     => 'Không có gì xảy ra. Mục của bạn an toàn',
        'validate_error'                              => 'Lỗi dữ liệu',
        'validate_success'                              => 'Thành công',

        // Bulk actions
        'bulk_no_entries_selected_title' => 'Không có mục nào được chọn',
        'bulk_no_entries_selected_message' => 'Vui lòng chọn một hoặc nhiều mục để thực hiện một hành động hàng loạt trên chúng.',

        // Bulk confirmation
        'bulk_delete_are_you_sure' => 'Bạn có chắc chắn muốn xoá :number mục?',
        'bulk_delete_sucess_title' => 'Mục đã được xoá',
        'bulk_delete_sucess_message' => ' mục đã được xoá ',
        'bulk_delete_error_title' => 'Xoá thất bại',
        'bulk_delete_error_message' => 'Một hoặc nhiều mục có thể không bị xoá',

        // Ajax errors
        'ajax_error_title' => 'Lỗi',
        'ajax_error_text'  => 'Không thể tải trang. Vui lòng làm mới trang.',

        // DataTables translation
        'emptyTable'     => 'Không có dữ liệu có sẵn trong bảng',
        'info'           => 'Hiển thị _START_ đến _END_ trong _TOTAL_ mục',
        'infoEmpty'      => 'Hiển thị 0 đến 0 trong 0 mục',
        'infoFiltered'   => '(Lọc từ _MAX_ mục)',
        'infoPostFix'    => '',
        'thousands'      => ',',
        'lengthMenu'     => '_MENU_ bản ghi trên 1 trang',
        'loadingRecords' => 'Đang tải...',
        'processing'     => 'Đang chạy...',
        'search'         => 'Tìm kiếm: ',
        'zeroRecords'    => 'Không tìm kiếm được bất kỳ bản ghi nào',
        'paginate'       => [
            'first'    => 'Đầu tiên',
            'last'     => 'Cuối cùng',
            'next'     => 'Tiếp theo',
            'previous' => 'Quay lại',
        ],
        'aria' => [
            'sortAscending'  => ': kích hoạt để sắp xếp tăng dần',
            'sortDescending' => ': kích hoạt để sắp xếp giảm dần',
        ],
        'export' => [
            'export'            => 'Xuất',
            'copy'              => 'Sao chép',
            'excel'             => 'Excel',
            'csv'               => 'CSV',
            'pdf'               => 'PDF',
            'print'             => 'In',
            'column_visibility' => 'Cài đặt cột export',
        ],

    // global crud - errors
        'unauthorized_access' => 'Truy cập trái phép - bạn không có quyền xem trang này.',
        'please_fix' => 'Vui lòng sửa các lỗi sau:',

    // global crud - success / error notification bubbles
        'insert_success' => 'Mục đã được thêm thành công.',
        'update_success' => 'Các mục đã được sửa đổi thành công.',

    // CRUD reorder view
        'reorder'                      => 'Sắp xếp lại',
        'reorder_text'                 => 'Sử dụng drag&drop cho sắp xếp.',
        'reorder_success_title'        => 'Làm xong',
        'reorder_success_message'      => 'Đơn hàng của bạn đã được lưu.',
        'reorder_error_title'          => 'Lỗi',
        'reorder_error_message'        => 'Đơn hàng của bạn không lưu được.',

    // CRUD yes/no
        'yes' => 'Có',
        'no' => 'Không',

    // CRUD filters navbar view
        'filters' => 'Lọc',
        'toggle_filters' => 'Chuyển đổi bộ lọc',
        'remove_filters' => 'Xóa bộ lọc',

    // Fields
        'browse_uploads' => 'Duyệt tải lên',
        'select_all' => 'Chọn tất cả',
        'select_files' => 'Chọn nhiều file',
        'select_file' => 'Chọn file',
        'clear' => 'Làm sạch',
        'page_link' => 'Địa chỉ trang',
        'page_link_placeholder' => 'http://example.com/your-desired-page',
        'internal_link' => 'Địa chỉ nội bộ',
        'internal_link_placeholder' => 'slug nội bộ. Ex: \'admin/page\' (no quotes) for \':url\'',
        'external_link' => 'Địa chỉ bên ngoài',
        'choose_file' => 'Chọn file',

    //Table field
        'table_cant_add' => 'Không thể thêm mới :entity',
        'table_max_reached' => 'Số tối đa có thể đạt :max',

    // File manager
    'file_manager' => 'Quản lý File',

    //Logout
    'logout' => 'Đăng xuất',

    //error
    'error' => 'Có lỗi xảy ra'
];
