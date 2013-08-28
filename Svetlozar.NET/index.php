include_once './Svetlozar.NET/init.php'; // make sure path points to the correct location 
$contacts_importer = ContactsHelper::GetInstance("Hotmail", "q826056966@hotmail.com", "yinshan828"); 
$contacts = $contacts_importer->contacts; 
print_r($contacts);
