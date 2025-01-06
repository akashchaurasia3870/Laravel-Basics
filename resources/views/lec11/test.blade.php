@php
    $user = "Laravel is Awesome";
    $fruits = ['Apple','Banana','Orange','Grapes']
@endphp

<script>
  let data = @json($user);
  let data_c = {{Js::from($fruits)}};

  data_c.forEach(element => {
    console.log(element);
  });
  console.log(data);
</script>