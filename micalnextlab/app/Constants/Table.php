<?php

namespace App\Constants;

class Table
{
    //Tên có dấu
    const nameOfTitle = 'sinh viên';
    const column1 = 'Mã sinh viên';
    const column2 = 'Mã loại sinh viên';
    const column3 = 'Tên thành viên';
    const column4 = 'Sinh nhật';
    const column5 = 'Giới tính';
    const column6 = 'Địa chỉ';
    const column7 = 'Số điện thoại';
    const column8 = 'Email';

    // Tên bảng
    const table_name1 = 'types';
    const table_name2 = 'students';

    // Các trường của bảng ẩn
    const tb1_1 = 'id';
    const tb1_2 = 'name';
    const tb1_3 = 'description';

    // Các trường của bảng hiển thị
    const tb2_1 = 'id';
    const tb2_2 = 'type_id';
    const tb2_3 = 'name';
    const tb2_4 = 'birthday';
    const tb2_5 = 'gender';
    const tb2_6 = 'address';
    const tb2_7 = 'phone_number';
    const tb2_8 = 'email';
}
