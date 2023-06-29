<?php
class userModel extends BaseModel
{
    const TABLE = 'user';
    public function getAll($select=['*'],$orderBy=[]){
        return $this->all(self::TABLE,$select,$orderBy);
    }
    public function store($user=[]){
        $this->create(self::TABLE,$user);
    }
    public function destroy($id)
    {
        $this->delete(self::TABLE,$id);
    }
    public function findById($id){
        return $this->find(self::TABLE,$id);
    }
    public function update($data=[],$id){
        return $this->updateNew(self::TABLE,$data,$id);
    }
    public function searchUser($search_temp){
        return $this->search(self::TABLE,$field='username',$search_temp);
    }

    // function getData()
    // {
    //     $products = [
    //         [
    //             'id' => '1',
    //             'name' => 'NTD'
    //         ],
    //         [
    //             'id' => '2',
    //             'name' => 'NTD'
    //         ],
    //         [
    //             'id' => '3',
    //             'name' => 'NTD'
    //         ]
    //     ];
    //     return $products;
    // }
}
?>