<?php

class CategoryAction
{
    public function addCategory()
    {
        global $errors;
        $errors = new WP_Error;
        if (isset($_POST['catName'])) {
            $categoryName = esc_attr($_POST['catName']);
            if (term_exists($categoryName, 'category') == 0) {
                wp_insert_term($categoryName, 'category');
            } else {
                $errors->add('termExist', 'Такая категория уже существует');
            }
        } else {
            $errors->add('emptyField', 'Пожалуйста, заполните пустое поле');
        }
    }

    public function updateCategory()
    {
        global $errors;
        $errors = new WP_Error;
        if (isset($_POST['updatedCategory'])) {
            $newCategoryName = esc_attr($_POST['updatedCategory']);
            $categoryID = esc_attr($_POST['categoryID']);
            wp_update_term($categoryID, 'category', ['name' => $newCategoryName]);
        } else {
            $errors->add('emptyField', 'Пожалуйста, заполните пустое поле');
        }
    }
}

$testObject = new CategoryAction();
$testObject->addCategory();
$testObject->updateCategory();
