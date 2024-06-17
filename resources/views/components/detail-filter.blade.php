<div class="px-48 py-5" id="detail-filter">
  {{-- <x-workspace-room-card :room="$rooms[0]" /> --}}
  {{-- <x-workspace-room-card :room="$rooms[1]" /> --}}
  @foreach ($rooms as $room)
    <x-workspace-room-card :room="$room" />
  @endforeach
</div>
