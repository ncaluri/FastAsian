const { data, error } = await supabase
  .from('inchecken')
  .select('*')
  .order('tijdstip', { ascending: false });
