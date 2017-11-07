<?php
header('content-type:text/html;charset=utf-8');
$a=date('n');
switch ($a) {
    case 1:
    case 3:
        case 5:
            case 7:
                case 8:
                    case 10:
                        case 12:
                        
        echo $a . "月有31天";

      break;
   case 2:
      echo $a . "月有29天";

      break; 
    
     
          case 4:
              case 6:
                  case 9:
                      case 11:
                          case 9:
                  
                              echo $a . "月有30天";
        break;
        
                 
              
}
