<?php
class Log{  
       
    //����ģʽ  
    private static $instance    = NULL;  
    //�ļ����  
    private static $handle      = NULL;  
    //��־����  
    private $log_switch     = NULL;  
    //��־���Ŀ¼  
    private $log_file_path      = NULL;  
    //��־�ļ���󳤶ȣ������������½����ļ�  
    private $log_max_len        = NULL;  
    //��־�ļ�ǰ׺,�� log_0  
    private $log_file_pre       = 'log_';  
   
           
    /** 
     * ���캯�� 
     *  
     * @since alpha 0.0.1 
     * @date 2014.02.04 
     * @author genialx 
     */  
    protected function __construct(){//ע�⣺�����������ļ��еĳ�������������и���  
           
        $this->log_file_path     = LOG_FILE_PATH;  
           
        $this->log_switch     = LOG_SWITCH;    
       
        $this->log_max_len    = LOG_MAX_LEN;  
       
    }  
       
    /** 
     * ����ģʽ 
     *  
     * @since alpha 0.0.1 
     * @date 2014.02.04 
     * @author genialx 
     */  
    public static function get_instance(){  
        if(!self::$instance instanceof self){  
            self::$instance = new self;  
        }  
        return self::$instance;  
    }  
       
    /** 
     *  
     * ��־��¼ 
     *  
     * @param int $type  0 -> ��¼(THING LOG) / 1 -> ����(ERROR LOG) 
     * @param string $desc 
     * @param string $time 
     *  
     * @since alpha 0.0.1 
     * @date 2014.02.04 
     * @author genialx 
     *  
     */  
    public function log($type,$desc,$time){  
        if($this->log_switch){  
               
            if(self::$handle == NULL){  
                $filename = $this->log_file_pre . $this->get_max_log_file_suf();  
                self::$handle = fopen($this->log_file_path . $filename, 'a');  
            }  
            switch($type){  
                case 0:  
                    fwrite(self::$handle, 'THING LOG:' . ' ' . $desc . ' ' . $time . chr(13));  
                    break;  
                case 1:  
                    fwrite(self::$handle, 'ERROR LOG:' . ' ' . $desc . ' ' . $time . chr(13));  
                    break;  
                default:  
                    fwrite(self::$handle, 'THING LOG:' . ' ' . $desc . ' ' . $time . chr(13));  
                    break;  
            }  
               
        }  
    }  
       
    /** 
     * ��ȡ��ǰ��־�������ĵ��ĺ�׺ 
     *  
     * @since alpha 0.0.1 
     * @date 2014.02.04 
     * @author genialx 
     */  
    private function get_max_log_file_suf(){  
        $log_file_suf = null;  
        if(is_dir($this->log_file_path)){  
            if($dh = opendir($this->log_file_path)){  
                while(($file = readdir($dh)) != FALSE){  
                    if($file != '.' && $file != '..'){  
                        if(filetype( $this->log_file_path . $file) == 'file'){  
                            $rs = split('_', $file);  
                            if($log_file_suf < $rs[1]){  
                                $log_file_suf = $rs[1];  
                            }  
                        }  
                    }  
                }  
                   
                if($log_file_suf == NULL){  
                    $log_file_suf = 0;  
                }  
                //�ض��ļ�  
                if( file_exists($this->log_file_path . $this->log_file_pre . $log_file_suf) && filesize($this->log_file_path . $this->log_file_pre . $log_file_suf) >= $this->log_max_len){  
                    $log_file_suf = intval($log_file_suf) + 1;  
                }  
                   
                return $log_file_suf;  
            }     
        }  
           
        return 0;  
           
    }  
       
    /** 
     * �ر��ļ���� 
     *  
     * @since alpha 0.0.1 
     * @date 2014.02.04 
     * @author genialx 
     */  
    public function close(){  
        fclose(self::$handle);  
    }  
}

  ?>