<?php

use Livewire\Component;

new class extends Component
{
  //
};
?>

<div>
  <title>Welcome</title>
  <h1 class="text-4xl">Prolab Server</h1>

  TEST

  <flux:spacer class="h-12" />

  <flux:text>
    <strong>Processor</strong>: AMD Ryzen 9 5900X <br/>
    Cores: 12
    Threads: 24
  </flux:text>

  <flux:spacer class="h-12" />

  <flux:text>
    <strong>Memory</strong>: 128GB <br/>
    DDR5_1: 32GB <br/>
    DDR5_2: 32GB <br/>
    DDR5_3: 32GB <br/>
    DDR5_4: 32GB <br/>
  </flux:text>

  <flux:spacer class="h-12" />

  <flux:text>
    <strong>Graphics</strong>: Intel Arc B580 <br/>
    VRAM: 12GB <br/>
    Drivers: xe <br/>
  </flux:text>

  <flux:spacer class="h-12" />

  <flux:text>
    <strong>Storage</strong>: 4TB (Gen 5 - 15GB/s) <br/> <br />
    <ol class="list-decimal text-[12px] -mt-4 text-white/70 ml-4">
      <li>Operating System</li>
      <li>Applications</li>
      <li>Databases</li>
    </ol>
  </flux:text>

  <flux:spacer class="h-12" />

  <flux:text>
    <strong>Storage</strong>: 4TB (Gen 4 - 6GB/s) <br/> <br />
    <ol class="list-decimal text-[12px] -mt-4 text-white/70 ml-4">
      <li>Caches</li>
      <li>Application Storages</li>
    </ol>
  </flux:text>

  <flux:spacer class="h-12" />

  <flux:text>
    <strong>Storage</strong>: 96TB (MergerFS Pool) <br/> <br />
    <ol class="list-decimal text-[12px] -mt-4 text-white/70 ml-4">
      <li>Large File Storage</li>
    </ol>
  </flux:text>
</div>
