<div>
    Count is {{ $count }}
    <button class = 'bg-red-400 hover:scale-105 transition duration-700 hover:bg-green-400 px-3 py-2 rounded-full text-white' wire:click="$emit('increment')">Increment</button>
    <button class = 'bg-red-400 hover:scale-105 transition duration-700 hover:bg-green-400 px-3 py-2 rounded-full text-white' wire:click="navigate">Navigate</button>
    <button class = 'bg-red-400 hover:scale-105 transition duration-700 hover:bg-green-400 px-3 py-2 rounded-full text-white' wire:click="navigateToUserId">Navigate to id</button>
</div>
