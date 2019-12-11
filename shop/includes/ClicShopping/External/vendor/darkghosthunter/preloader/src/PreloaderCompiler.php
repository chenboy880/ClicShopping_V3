<?php

namespace DarkGhostHunter\Preloader;

use DateTime;
use const PHP_EOL;

class PreloaderCompiler
{
    /**
     * Preloader stub contents
     *
     * @var false|string
     */
    public string $contents;

    /**
     * Configuration array
     *
     * @var array
     */
    public array $preloaderConfig;

    /**
     * Opcache statistics array
     *
     * @var array
     */
    public array $opcacheConfig;

    /**
     * The file list to include
     *
     * @var array
     */
    public array $list;

    /**
     * The Composer Autoload location
     *
     * @var null|string
     */
    public ?string $autoload = null;

    /**
     * PHP.ini preload list input
     *
     * @var string
     */
    public string $output;

    /**
     * Returns a compiled string
     *
     * @return string|string[]
     */
    public function compile() : string
    {
        $replacing = array_merge($this->preloaderConfig, $this->opcacheConfig, [
            '@output' => $this->output,
            '@generated_at' => date('Y-m-d H:i:s e'),
            '@autoload' => $this->autoload,
            '@list' => $this->parseList()
        ]);

        return str_replace(array_keys($replacing), $replacing, $this->contents);
    }

    /**
     * Parses the list into an injectable string
     *
     * @return string
     */
    protected function parseList()
    {
        return PHP_EOL . '    ' . "'" . implode("'," . PHP_EOL . "    '", $this->list) . "'" . PHP_EOL;
    }
}