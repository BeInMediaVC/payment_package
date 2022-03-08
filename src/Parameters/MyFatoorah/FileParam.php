<?php


namespace beinmedia\payment\Parameters\MyFatoorah;


class FileParam
{
    public $FileUpload; //base path for file
    public $FileType; //1 for Commercial License 2 for Signature Authorization 3 for Articles of Association 4 for Civil Id 5 for Civil Id Back 6 for 3-parties contract/ agreement 7 for Others
    public $SupplierCode; //
    public $ExpireDate; //epoch time integer

    public function __construct($file_path, $fileType, $supplierCode, $expires_at = null)
    {
        $this->ExpireDate = empty($expires_at) ? strtotime("+5 years", time()) : $expires_at;
        $this->FileUpload = $file_path;
        $this->FileType = $fileType;
        $this->SupplierCode = $supplierCode;
    }

}
