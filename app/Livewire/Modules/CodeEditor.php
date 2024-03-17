<?php

namespace App\Livewire\Modules;

use Livewire\Attributes\Locked;
use Livewire\Attributes\Modelable;
use Livewire\Component;
use Throwable;

class CodeEditor extends Component
{
    #[Locked]
    public ?array $validationException = null;
    public ?bool $validationSuccess = null;

    #[Modelable]
    public string $code = '';

    public function validationCode(string $code)
    {
        $code = urldecode($code);

        try {
            token_get_all("<?php\n".$code."\n?>", TOKEN_PARSE);
            $this->validationSuccess = true;
        } catch (Throwable $exception) {
            $this->validationSuccess = false;
            $this->validationException = [
                'error' => $exception->getMessage(),
                'line' => $exception->getLine() - 2,
            ];
        }
    }

    public function updatedCode(&$code)
    {
        $this->code = str_replace('<?php', '', $code);
        $this->code = str_replace('?>', '', $this->code);
    }

    public function render()
    {
        return view('livewire.modules.code-editor');
    }
}
