<?php
 function calculerFacture ($age,$TARIF_BASE_CONSULTATION):int {
    if ($age >65){
       $tarif_majoree=$TARIF_BASE_CONSULTATION+0.2*$TARIF_BASE_CONSULTATION; 
    return $tarif_majoree;
       }
       else{
        return $TARIF_BASE_CONSULTATION;
       }
}
function getBadgeService ($patients):array{
    switch(code_service){
        case cardio :
            return ["code_service"=>"cardiologie"];
            case derma:
                return ["code_service"=>"dermatologie"];
                case pediatrie:
                    return ["code_service"=>"pediatrie"]
    }

    
}
function getlibelleUrgence ($patients):string{
    switch(urgence){
        case rouge:
            return "urgence absolue";
            case orange:
                return "urgence relative";
            case vert:
                return "consultation standard";
    }
}
function filtrerUrgences(&patients):array{
    &rouges=array_filter($patients,fn($urgence)=>$urgence=="rouge");
    return $rouges;
}
?>