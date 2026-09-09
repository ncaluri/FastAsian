const { data, error } = await supabase
  .from('vrijstellingen')
  .select('*');
