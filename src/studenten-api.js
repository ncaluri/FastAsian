const { data, error } = await supabase
  .from('studenten')
  .select('*');
