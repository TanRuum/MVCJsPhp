<?php
class productModel extends BaseModel
{
    const TABLE = 'sanpham';
    public function getAll($select=['*'],$orderBy=[]){
        return $this->all(self::TABLE,$select,$orderBy);
    }
    public function store($product=[]){
        $this->create(self::TABLE,$product);
    }
    public function destroy($id){
        $this->delete(self::TABLE,$id);
    }
    public function findById($id){
        return $this->find(self::TABLE,$id);
    }
    public function update($data=[],$id){
        return $this->updateNew(self::TABLE,$data,$id);
    }
//     function getData()
//     {
//         $products = [
//             [
//                 'id' => '1',
//                 'name' => 'NTD'
//             ],
//             [
//                 'id' => '2',
//                 'name' => 'NTD'
//             ],
//             [
//                 'id' => '3',
//                 'name' => 'NTD'
//             ]
//         ];
//         return $products;
//     }
}
?>