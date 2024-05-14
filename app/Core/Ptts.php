<?php
namespace Core;

if(!extension_loaded('com')) {
        echo 'Loading the COM extension dynamically ...';
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        // For Windows systems
        dl('php_com_dotnet.dll');
    } else {
        die('COM extension is not supported on this platform.');
    }
}

class Ptts {
    private $tts;
    public const  MALEVoice = 0;
    public const FEMALEVoice = 1;
    
    public function __construct(public string $text, public int $rate = 0,public int $voice = self::FEMALEVoice) {
        $this->tts = new \COM('SAPI.SpVoice');
        $this->tts->Rate = $this->rate;
        $this->tts->Voice = $this->tts->GetVoices()->Item($this->voice);
    }
    
    public function run() {
        $this->tts->Speak($this->text);
        $this->tts->WaitUntilDone(1000);
    }
}
