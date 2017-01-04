<?php
header("Content-type: text/plain; charset=UTF-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
if(isset($_GET['brand'])){
							$host="localhost";
							$dbname="backpack";
							$user="root"; 
							$pass="";
						try {
							# MySQL через PDO_MYSQL 
							$DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
						} 
							catch(PDOException $e) {
							echo $e->getMessage(); 
						}
							$stmt = $DBH->prepare("SELECT 
TOF_MODELS_UA.MOD_ID as mod_id, 
TOF_MODELS_UA.MOD_MFA_ID as mod_mfa, 
TOF_MODELS_UA.MOD_CDS_ID as mod_cds,
TOF_MODELS_UA.MOD_PCON_START as start,
TOF_MODELS_UA.MOD_PCON_END as end,
TOF_COUNTRY_DESIGNATIONS.CDS_TEX_ID as text_key, 
TOF_COUNTRY_DESIGNATIONS.CDS_ID as TYP_CDS_IDforTYPES, 
TOF_DES_TEXTS.TEX_TEXT as text
FROM TOF_MODELS_UA 
INNER JOIN TOF_COUNTRY_DESIGNATIONS ON TOF_COUNTRY_DESIGNATIONS.CDS_ID = TOF_MODELS_UA.MOD_CDS_ID
INNER JOIN TOF_DES_TEXTS ON TOF_COUNTRY_DESIGNATIONS.CDS_TEX_ID = TOF_DES_TEXTS.TEX_ID 
WHERE TOF_MODELS_UA.MOD_MFA_ID = ".$_GET['brand']."  AND TOF_COUNTRY_DESIGNATIONS.CDS_LNG_ID = '16' ORDER BY MOD_ID" );
//INNER JOIN TOF_COUNTRY_DESIGNATIONS ON TOF_COUNTRY_DESIGNATIONS.CDS_ID = TOF_MODELS_UA.MOD_CDS_ID 
//WHERE TOF_MODELS.MOD_MFA_ID = ".$_GET['brand']." AND TOF_COUNTRY_DESIGNATIONS.CDS_LNG_ID = '16' ORDER BY MOD_ID" );
							$stmt->execute();
							//$stm->execute(array($colName));
							/* $line = $stm->fetch();
							var_dump($line); */
							foreach ($stmt as $row)
	{
		//$oneByOne.=$row['text'].'('.$row['start'].' - '.$row['end'].') <a class="mod" data-modid="'.$row['TYP_CDS_IDforTYPES'].'" href="model.php?TYP_CDS_IDforTYPES='.$row['mod_id'].'">'.$row['mod_id'].'</a><br>';
		$oneByOne.=$row['text'].'('.$row['start'].' - '.$row['end'].') <a class="model" onclick="getMod('.$row['mod_id'].')" href="#">'.$row['mod_id'].'</a><br>';
	}
}
echo $oneByOne;
?>