def fibonacci(n)
if n<=1
return n
else
return fibonacci(n-1)+fibonacci(n-2)
end
end
(0..10). each do |i|
 puts fibonacci(i)
end

