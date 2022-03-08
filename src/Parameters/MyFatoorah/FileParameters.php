<?php


namespace beinmedia\payment\Services\Parameters\MyFatoorah;


class FileParameters
{
    public $FileUpload; //base path for file
    public $FileType; //one of the options in tap
    public $SupplierCode; //any string
    public $ExpireDate; //epoch time integer

    public function __construct($file_path, $fileType, $supplierCode, $expires_at = null)
    {
        $this->ExpireDate = empty($expires_at) ? strtotime("+5 years", time()) : $expires_at;
        $this->FileUpload = $file_path;
        $this->FileType = $fileType;
        $this->SupplierCode = $supplierCode;
    }

}
