
<div class="overflow-x-auto">
  <table class="table">
    <!-- head -->
    <thead>
      <tr>
        {{ $thead ?? '' }}
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
        {{ $slot }}
    </tbody>
  </table>
</div>
