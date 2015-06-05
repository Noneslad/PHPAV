
<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of model
 * Classe d'abstration � la base de donn�e une sorte de petit ORM<br/>
 * En mettant une classe en extends de celle ci, on peut interagir avec la base de donn�es sur les attributs des objets<br/>
 *
 * @author a.frier
 * @category Base de donn�es
 * @version 0.1
 * 
 */
class model {
    
    private $cnx;
    private $sql_no_bd = array('sql_no_bd','cnx');
    function __construct() {
            try {
//                echo 'la base n\'est pas encore charg�e';
                $this->cnx = new PDO('mysql:host='.PARAM_hote.';port='.PARAM_port.';dbname='.PARAM_nom_bd, PARAM_utilisateur, PARAM_mot_passe,array(PDO::ATTR_PERSISTENT => true));
//                echo 'la base est charg�e';
            } 
            catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }

            
        }

    public function insert(){
        $html = new html();
        $sql = "insert into ".$this->getSql_table()." (";
        foreach (get_object_vars($this) as $key => $value) {
            if(!in_array($key,$this->sql_no_bd)){
                $sql.= ' `'.$key.'`,';
            }
        }
        $sql = substr($sql, 0,-1);
        $sql.= ") values (";
        foreach (get_object_vars($this) as $key => $value) {
            if(!in_array($key,$this->sql_no_bd)){
                $sql.= ' :'.$key.',';
            }
        }
        $sql = substr($sql, 0,-1);
        $sql.= ');';
        $rq = $this->cnx->prepare($sql);
        $tab_data =  array();
        foreach (get_object_vars($this) as $key => $value) {
            if(!in_array($key,$this->sql_no_bd)){
                $tab_data[':'.$key]= $value != null ? $this->escape($value):$value;
            }
        }
        try {
            $rq->execute($tab_data);
            $rq->errorCode() > 0 ? krumo($rq->errorInfo()) : '';
            if($this->have_relative_id()){
                $id_rel = explode(',', $this->getSql_id());
                $id = $this->$id_rel[0].",".$this->$id_rel[1];
                $id .= isset($id_rel[2]) ? ",".$this->$id_rel[2] : '';
            }
            else{
                    if($this->getSql_id()){
                        $id_lib =$this->getSql_id();
                        if(isset($this->$id_lib)){
                            $id =  $this->$id_lib;
                        }
                        else{
                            $id = 'element enfant';                           
                        }
                    }
            }
            $html->p('Insert de '.  get_class($this).' : '.$html->get_span($id,array('class'=>'gras italic color_tomato')),array('class'=>'border_1_s_b border_radius_5 bg_vert_clair pad_15 margin_15'));
        }
        catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    public function delete(){
        if($this->have_relative_id()){
            $id_rel = explode(',', $this->getSql_id());
            $condition = $id_rel[0]." = '".$this->$id_rel[0]."' and ".$id_rel[1]." = '".$this->$id_rel[1]."'";
            
        }
        else{
            $lib_id = $this->getSql_id();
            $condition = $this->getSql_id()." = '".$this->$lib_id."'";
        }
        $sql = "delete from ".$this->getSql_table()." where ".$condition;
        $rq = $this->cnx->query($sql);
    }
    public function test(){
        if($this->have_relative_id()){
            echo 'c\'est du relatif';
        }else{
            echo 'ce n\'est pas du relatif !';
        }
    }
    public function have_relative_id(){
        return count(explode(',', $this->getSql_id()))>1;
    }
    public function update(){
        $html = new html();
        $sql = "update ".$this->getSql_table()." set ";
        foreach (get_object_vars($this) as $key => $value) {
            if(!in_array($key,$this->sql_no_bd) && !in_array($key,explode(',', $this->getSql_id()))){
                if($value != null){
                    $sql.= $key." = :".$key.',';
                }
            }
        }
        $sql = substr($sql, 0,-1);
        if($this->have_relative_id()){
            $id_rel = explode(',', $this->getSql_id());
            $condition = $id_rel[0]." = '".$this->$id_rel[0]."' and ".$id_rel[1]." = '".$this->$id_rel[1]."'";
        }
        else{
            $lib_id = $this->getSql_id();
            $condition = $this->getSql_id()." = '".$this->$lib_id."'";
        }
        $sql.= " where ".$condition;
        $rq = $this->cnx->prepare($sql);
        $tab_data =  array();
        foreach (get_object_vars($this) as $key => $value) {
            if(!in_array($key,$this->sql_no_bd)&& !in_array($key,explode(',', $this->getSql_id()))){
                if($value != null){
                    $tab_data[':'.$key]= $this->escape($value);
                }
            }
        }
        $rq->execute($tab_data);
        if($rq->errorCode() > 0){
            krumo($rq->errorInfo());
            echo "\n".$sql;
        }
        if($this->have_relative_id()){
                $id_rel = explode(',', $this->getSql_id());
                $id = $this->$id_rel[0].",".$this->$id_rel[1];
                $id .= isset($id_rel[2]) ? ",".$this->$id_rel[2] : '';
            }else{
                $id_lib = $this->getSql_id();
                $id = $this->$id_lib;
            }
        $html->p('Update de '.  get_class($this).' : '.$html->get_span($id,array('class'=>'gras italic color_tomato')),array('class'=>'border_1_s_b border_radius_5 bg_gris pad_15 margin_15'));
   
    }
    
    public function occurence_exist(){
        $html = new html();
        $lib_id = $this->getSql_id();
        $sql = "select ".$this->getSql_id()." from ".$this->getSql_table()." where ";
         if($this->have_relative_id()){
            $id_rel = explode(',', $this->getSql_id());
            $condition = $id_rel[0]." = '".$this->$id_rel[0]."' and ".$id_rel[1]." = '".$this->$id_rel[1]."' ";
            $condition.= isset($id_rel[2]) ? " and ".$id_rel[2]." = '".$this->$id_rel[2]."' " : '';
        }
        else{
            $lib_id = $this->getSql_id();
            $condition = $this->getSql_id()." = '".$this->$lib_id."' ";
        }
        $sql.= $condition;
        $rq = $this->cnx->query($sql);
        $res = $rq->fetchObject();
        $html->vard('have occurence', $res);
        return $res;
    }
    public function save(){
        if(!$this->occurence_exist()){
          $this->insert();
        }
        else{
            $this->update();
        }
    }
    public function select($champs = array(),$where = array(),$all = null){
        $html = new html();
        $sql = "select ";
        if(is_array($champs) && !empty($champs)){//si champs n'est pas vide
            $sql.= $this->getSql_id().', ';
            foreach ($champs as $un_champ) { // pour chacun des champs
                echo $un_champ.'<br/>';
                if(array_key_exists($un_champ, get_object_vars($this))){// si le champ fait bien partie des attributs de l'objet en cours
                    $sql.= $un_champ.",";// on les rajoute �la liste des champs � s�l�ctionner
                }
            }
            $sql = substr($sql, 0,-1);// on vire la virgule de fin
        }
        else{
            $sql.= "* "; //sinon on prend tout !
        }
        $sql.= " from ".$this->getSql_table(); // dans la table de l'objet en cours
        $text_where = "";
        if(is_array($where) && !empty($where)){ // si le champ where est rempli
            $text_where = " where "; // on ajoute le mot cl� where
            foreach ($where as $champs => $valeur) { // et pour chacun des �l�ments where
                if(in_array($champs, get_object_vars($this))){ // si le champ sur lequel porte la condition est bien un attribut de l'objet
                    $text_where .= $champs." = '".$valeur."' and"; // on rajoute cette condition et le mot cl� 'and' !! todo choisir entre and et or 
                }
            }
            $text_where = substr($text_where, 0,-3); // on vire le dernier AND
            echo $text_where;
        }
        elseif($all == null){ // sinon si le champs all est � null c'est que l'on ne veut pas tout
            if($this->have_relative_id()){
                $id_rel = explode(',', $this->getSql_id());
                $condition = $id_rel[0]." = '".$this->$id_rel[0]."' and ".$id_rel[1]." = '".$this->$id_rel[1]."'";
                $condition.= isset($id_rel[2]) ? ' and '.$id_rel[2]." = '".$this->$id_rel[2]."'" : '';
            }
            else{
                $lib_id = $this->getSql_id();
                $condition = $this->getSql_id()." = '".$this->$lib_id."'";
            }
            $text_where = " where ".$condition; // bin l'id de l'objet !
        }
        $sql.= $text_where;
        $retour = array();
        
        $rq = $this->cnx->query($sql);
        $rq->setFetchMode(PDO::FETCH_OBJ);
        if($rq->errorCode() > 0){
            $html->vard('requete de select',$rq->errorInfo()); 
        }
        while($res = $rq->fetch()){
            $lib_id = $this->getSql_id();
            if($this->have_relative_id()){
                $lib_id = substr($lib_id, 0,  strpos($lib_id, ','));
            }
            $retour[$res->$lib_id] = $res;
        }
        return $retour;
    }
    public function find_all(){
        return $this->select(null,null,'all');
    }
    public function find($champs = array()){
        return $this->select($champs);
    }
    public function load($champs = array()){
        
        $donnees = $this->find($champs);
        foreach ($donnees as $une_occurence) {
            foreach ($une_occurence as $champ => $valeur) {
                $this->$champ = stripcslashes(($valeur));
            }
        }
    }
    public function escape($data) {
	
		switch(gettype($data)) {
			case 'string':
                                                       
                            $data = $data == 'null' ? null : self::mysql_escape_input($data);
                            break;
			case 'boolean':
				$data = (int) $data;
				break;
			case 'double':
				$data = sprintf('%F', $data);
				break;
			default:
				$data = ($data === null) ? 'null' : $data;
		}
		
		return (string) $data;
	
	}
    public function __toString() {
       
         $html= new html();
         $r = "";
         $r .= $html->get_open_div(array('class'=>'border_1_s_b border_radius_25 width_800px pad_25'));
         $r .= $html->get_p($html->get_span(strtoupper(get_class($this)).' :: ',array('class'=>'color_tomato font_size_up float_l')).$html->get_span($html->get_span('table : ',array('class'=>'font_size_down color_gray italic')).$this->getSql_table().$html->get_br().$html->get_span('id : ',array('class'=>'font_size_down color_gray italic')).$this->getSql_id(),array('class'=>'float_r')));
         $r .= $html->get_div('', array('class'=>'clear')); 
         foreach (get_object_vars($this) as $champ => $valeur) {
             
             if(!in_array($champ,$this->sql_no_bd)){
                 if(is_object($valeur)){
                    krumo($valeur);
                }else{
                    $r.= $html->get_p($champ.$html->get_sp(8).' => '.$html->get_sp(8).$html->get_span($valeur,array('class'=>'color_vert_pomme')).$html->get_sp(8).$html->get_span(gettype($valeur),array('class'=>'italic font_size_down color_bleu_fonce')),array('class'=>'margin_t_5_off'));
                }
             }
        }
         $r .= $html->get_close_div();
         return $r;
    }

    public static function get_sql($la_requete){
        $cnx = new PDO('mysql:host='.PARAM_hote.';port='.PARAM_port.';dbname='.PARAM_nom_bd, PARAM_utilisateur, PARAM_mot_passe,array(PDO::ATTR_PERSISTENT => true));
        $rq = $cnx->query($la_requete);
        return $rq->fetchObject();
    }
    public static function get_sql_tab($la_requete){
        $cnx = new PDO('mysql:host='.PARAM_hote.';port='.PARAM_port.';dbname='.PARAM_nom_bd, PARAM_utilisateur, PARAM_mot_passe,array(PDO::ATTR_PERSISTENT => true));
        $rq = $cnx->query($la_requete);
        $rq->setFetchMode(PDO::FETCH_ASSOC);
        $tab_retour = array();
        while($res = $rq->fetch()){
            $tab_retour[] = $res; 
//            $html = new html();
//            $html->vard('le res requete',$res);
        }
        return $tab_retour;
    }
    public static function mysql_escape_input($value) {
	if ((!is_null($value)) && strlen($value) > 0) {
		$retval = $value;
		$retval = Htmlentities ($value);
		if (get_magic_quotes_gpc())
		$retval = stripslashes($retval);
//		$retval = mysql_real_escape_string($retval);
		$retval = html_entity_decode($retval) ;
	}
	else
		$retval = $value;
	return $retval;

}
    public static function exec_sql($sql){
        $cnx = new PDO('mysql:host='.PARAM_hote.';port='.PARAM_port.';dbname='.PARAM_nom_bd, PARAM_utilisateur, PARAM_mot_passe,array(PDO::ATTR_PERSISTENT => true));
        $rq = $cnx->exec($sql);
        return $rq;
    }
}

?>
