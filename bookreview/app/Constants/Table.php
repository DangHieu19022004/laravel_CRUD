<?php

namespace App\Constants;

class Table
{
    //Tên có dấu
    const nameOfTitle = 'sách';
    const column1 = 'Mã sách';
    const column2 = 'Tên sách';
    const column3 = 'Tên tác giả';
    const column4 = 'Thể loại';
    const column5 = 'Năm phát hành';
    const column6 = 'Mã số định danh quốc tế'; //ISBN
    const column7 = 'URL ảnh bìa';

    // Tên bảng
    const table_name1 = 'reviews';
    const table_name1One = 'review';
    const table_name2 = 'books';
    const table_name2One = 'book';

    // Các trường của bảng books
    const tb1_1 = 'ReviewID';
    const tb1_2 = 'BookID';
    const tb1_3 = 'UserID';
    const tb1_4 = 'Rating';
    const tb1_5 = 'ReviewText';
    const tb1_6 = 'ReviewDate';

    // Các trường của bảng borrowings
    const tb2_1 = 'BookID';
    const tb2_2 = 'Title';
    const tb2_3 = 'Author';
    const tb2_4 = 'Genre';
    const tb2_5 = 'PublishedYear';
    const tb2_6 = 'ISBN';
    const tb2_7 = 'CoverImageURL';
}
