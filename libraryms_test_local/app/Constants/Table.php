<?php

namespace App\Constants;

class Table
{
    //Tên có dấu
    const nameOfTitle = 'phiếu mượn';
    const column1 = 'Mã phiếu mượn';
    const column2 = 'Mã sách';
    const column3 = 'Mã thành viên';
    const column4 = 'Ngày mượn';
    const column5 = 'Ngày phải trả';
    const column6 = 'Ngày trả';

    // Tên bảng
    const table_name1 = 'books';
    const table_name1One = 'book';
    const table_name2 = 'borrowings';
    const table_name2One = 'borrowing';

    // Các trường của bảng books
    const tb1_1 = 'BookID';
    const tb1_2 = 'Title';
    const tb1_3 = 'Author';
    const tb1_4 = 'ISBN';
    const tb1_5 = 'PublishedYear';
    const tb1_6 = 'Genre';

    // Các trường của bảng borrowings
    const tb2_1 = 'BorrowingID';
    const tb2_2 = 'BookID';
    const tb2_3 = 'MemberID';
    const tb2_4 = 'BorrowDate';
    const tb2_5 = 'DueDate';
    const tb2_6 = 'ReturnedDate';
}
